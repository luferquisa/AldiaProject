<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstadoLaboralTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstadoLaboralTable Test Case
 */
class EstadoLaboralTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EstadoLaboralTable
     */
    public $EstadoLaboral;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.estado_laboral'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EstadoLaboral') ? [] : ['className' => 'App\Model\Table\EstadoLaboralTable'];
        $this->EstadoLaboral = TableRegistry::get('EstadoLaboral', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EstadoLaboral);

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
