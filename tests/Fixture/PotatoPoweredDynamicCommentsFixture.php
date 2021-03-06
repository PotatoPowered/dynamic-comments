<?php
/**
 * dynamic-comments (https://github.com/PotatoPowered/dynamic-types)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE
 * Redistributions of files must retain the above copyright notice.
 *
 * @author      Blake Sutton <blake@potatopowered.net>
 * @copyright   Copyright (c) Potato Powered Software
 * @link        http://potatopowered.net
 * @license     http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace DynamicComments\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PotatoPoweredDynamicCommentsFixture
 */
class PotatoPoweredDynamicCommentsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'dynamic_type_id' => ['type' => 'integer', 'length' => 11, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'dynamic_type_key' => ['type' => 'integer', 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ]
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'dynamic_type_id' => 1,
            'dynamic_type_key' => '1',
            'created' => '2016-01-01 12:13:14',
            'modified' => '2016-01-01 12:13:14'
        ],
    ];
}
