<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClienteEmpresasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClienteEmpresasTable Test Case
 */
class ClienteEmpresasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClienteEmpresasTable
     */
    public $ClienteEmpresas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cliente_empresas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ClienteEmpresas') ? [] : ['className' => 'App\Model\Table\ClienteEmpresasTable'];
        $this->ClienteEmpresas = TableRegistry::get('ClienteEmpresas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClienteEmpresas);

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
