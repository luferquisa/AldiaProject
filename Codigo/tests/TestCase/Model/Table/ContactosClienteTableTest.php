<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContactosClienteTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContactosClienteTable Test Case
 */
class ContactosClienteTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ContactosClienteTable
     */
    public $ContactosCliente;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.contactos_cliente'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ContactosCliente') ? [] : ['className' => 'App\Model\Table\ContactosClienteTable'];
        $this->ContactosCliente = TableRegistry::get('ContactosCliente', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ContactosCliente);

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
