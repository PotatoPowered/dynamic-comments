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
namespace DynamicComments\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use DynamicComments\Test\Fixture;

/**
 * DynamicComments\Model\DynamicComments Test Case
 */
class DynamicCommentsTableTest extends TestCase
{

    public $fixtures = [
        'plugin.dynamic_comments.potato_powered_dynamic_comments',
        'plugin.dynamic_types.potato_powered_dynamic_types'
    ];

    /**
     * Test subject
     *
     * @var \DynamicComments\Model\Table\DynamicCommentsTable
     */
    public $DynamicComments;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DynamicComments') ? [] : ['className' => 'DynamicComments\Model\Table\DynamicCommentsTable'];
        $this->DynamicComments = TableRegistry::get('DynamicComments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DynamicComments);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * All values for the included fixture are defaulted to 1.
     *
     * @return void
     */
    public function testInitialization()
    {
        // expected values
        $expected_result = 1;

        // data setup and fetch
        $comment = $this->DynamicComments->get(1);
        $this->assertInstanceOf('DynamicComments\Model\Entity\DynamicComment', $comment);

        //assertions
        $this->assertEquals($expected_result, $comment->id);
        $this->assertEquals($expected_result, $comment->dynamic_type_id);
        $this->assertEquals($expected_result, $comment->dynamic_type_key);
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testCreation()
    {
        // expected values
        $expected_result = 2;

        // data setup and fetch
        $comment = $this->DynamicComments->newEntity();
        $this->assertEquals($expected_result, $this->DynamicComments->getType("DynamicComments"));
    }
}
