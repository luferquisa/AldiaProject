<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DivisionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DivisionTable Test Case
 */
class DivisionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DivisionTable
     */
    public $Division;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.division'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Division') ? [] : ['className' => 'App\Model\Table\DivisionTable'];
        $this->Division = TableRegistry::get('Division', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Division);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
