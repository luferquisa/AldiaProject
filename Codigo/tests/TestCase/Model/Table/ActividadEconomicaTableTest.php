<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActividadEconomicaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActividadEconomicaTable Test Case
 */
class ActividadEconomicaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ActividadEconomicaTable
     */
    public $ActividadEconomica;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.actividad_economica'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ActividadEconomica') ? [] : ['className' => 'App\Model\Table\ActividadEconomicaTable'];
        $this->ActividadEconomica = TableRegistry::get('ActividadEconomica', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ActividadEconomica);

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
