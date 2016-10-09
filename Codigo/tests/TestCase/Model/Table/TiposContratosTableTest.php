<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposContratosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposContratosTable Test Case
 */
class TiposContratosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposContratosTable
     */
    public $TiposContratos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipos_contratos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TiposContratos') ? [] : ['className' => 'App\Model\Table\TiposContratosTable'];
        $this->TiposContratos = TableRegistry::get('TiposContratos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TiposContratos);

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
