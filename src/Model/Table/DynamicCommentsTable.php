<?php
/**
 * dynamic-comments (https://github.com/PotatoPowered/dynamic-types)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    Blake Sutton <blake@potatopowered.net>
 * @copyright Copyright (c) Potato Powered Software
 * @link      http://potatopowered.net
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace DynamicComments\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use DynamicComments\Model\Entity\DynamicComment;

/**
 * DynamicComments Model
 *
 * @property \Cake\ORM\Association\BelongsTo $DynamicTypes
 */
class DynamicCommentsTable extends Table
{

    /**
     * Initialize method
     *
     * @param  array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('potato_powered_dynamic_comments');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo(
            'DynamicTypes.DynamicType',
            [
                'foreignKey' => 'dynamic_type_id',
                'joinType' => 'INNER',
                'className' => 'PotatoPoweredDynamicTypes'
            ]
        );

        // allows created and modified fields to populate
        $this->addBehavior('Timestamp');

        $this->addBehavior('DynamicTypes.Dynamic');
    }

    /**
     * Default validation rules.
     *
     * @param  \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('body', 'create')
            ->notEmpty('body');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param  \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['dynamic_type_id'], 'DynamicTypes.DynamicType'));

        return $rules;
    }
}
