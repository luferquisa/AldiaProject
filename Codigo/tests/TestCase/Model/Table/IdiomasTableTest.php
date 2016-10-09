<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IdiomasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IdiomasTable Test Case
 */
class IdiomasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IdiomasTable
     */
    public $Idiomas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.idiomas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Idiomas') ? [] : ['className' => 'App\Model\Table\IdiomasTable'];
        $this->Idiomas = TableRegistry::get('Idiomas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Idiomas);

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
