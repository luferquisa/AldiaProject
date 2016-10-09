<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecursosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecursosTable Test Case
 */
class RecursosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RecursosTable
     */
    public $Recursos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.recursos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Recursos') ? [] : ['className' => 'App\Model\Table\RecursosTable'];
        $this->Recursos = TableRegistry::get('Recursos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Recursos);

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
