<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstadosCivilesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstadosCivilesTable Test Case
 */
class EstadosCivilesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EstadosCivilesTable
     */
    public $EstadosCiviles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.estados_civiles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EstadosCiviles') ? [] : ['className' => 'App\Model\Table\EstadosCivilesTable'];
        $this->EstadosCiviles = TableRegistry::get('EstadosCiviles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EstadosCiviles);

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
