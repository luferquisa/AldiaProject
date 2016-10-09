<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CajaCompensacionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CajaCompensacionTable Test Case
 */
class CajaCompensacionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CajaCompensacionTable
     */
    public $CajaCompensacion;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.caja_compensacion'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CajaCompensacion') ? [] : ['className' => 'App\Model\Table\CajaCompensacionTable'];
        $this->CajaCompensacion = TableRegistry::get('CajaCompensacion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CajaCompensacion);

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
