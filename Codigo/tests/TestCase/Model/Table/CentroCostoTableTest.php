<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CentroCostoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CentroCostoTable Test Case
 */
class CentroCostoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CentroCostoTable
     */
    public $CentroCosto;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.centro_costo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CentroCosto') ? [] : ['className' => 'App\Model\Table\CentroCostoTable'];
        $this->CentroCosto = TableRegistry::get('CentroCosto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CentroCosto);

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
