<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArpTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArpTable Test Case
 */
class ArpTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArpTable
     */
    public $Arp;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.arp'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Arp') ? [] : ['className' => 'App\Model\Table\ArpTable'];
        $this->Arp = TableRegistry::get('Arp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Arp);

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
