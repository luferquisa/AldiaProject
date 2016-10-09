<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubcentroCostoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubcentroCostoTable Test Case
 */
class SubcentroCostoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SubcentroCostoTable
     */
    public $SubcentroCosto;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.subcentro_costo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SubcentroCosto') ? [] : ['className' => 'App\Model\Table\SubcentroCostoTable'];
        $this->SubcentroCosto = TableRegistry::get('SubcentroCosto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SubcentroCosto);

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
