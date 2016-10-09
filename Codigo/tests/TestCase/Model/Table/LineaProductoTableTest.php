<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LineaProductoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LineaProductoTable Test Case
 */
class LineaProductoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LineaProductoTable
     */
    public $LineaProducto;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.linea_producto'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LineaProducto') ? [] : ['className' => 'App\Model\Table\LineaProductoTable'];
        $this->LineaProducto = TableRegistry::get('LineaProducto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LineaProducto);

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
