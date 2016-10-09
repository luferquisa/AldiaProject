<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SectorEconomicoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SectorEconomicoTable Test Case
 */
class SectorEconomicoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SectorEconomicoTable
     */
    public $SectorEconomico;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sector_economico'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SectorEconomico') ? [] : ['className' => 'App\Model\Table\SectorEconomicoTable'];
        $this->SectorEconomico = TableRegistry::get('SectorEconomico', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SectorEconomico);

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
