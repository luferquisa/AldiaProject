<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PensionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PensionesTable Test Case
 */
class PensionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PensionesTable
     */
    public $Pensiones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pensiones'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Pensiones') ? [] : ['className' => 'App\Model\Table\PensionesTable'];
        $this->Pensiones = TableRegistry::get('Pensiones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pensiones);

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
