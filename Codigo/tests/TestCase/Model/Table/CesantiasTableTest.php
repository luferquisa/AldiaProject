<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CesantiasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CesantiasTable Test Case
 */
class CesantiasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CesantiasTable
     */
    public $Cesantias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cesantias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cesantias') ? [] : ['className' => 'App\Model\Table\CesantiasTable'];
        $this->Cesantias = TableRegistry::get('Cesantias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cesantias);

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
