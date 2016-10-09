<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposDocumentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposDocumentosTable Test Case
 */
class TiposDocumentosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposDocumentosTable
     */
    public $TiposDocumentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipos_documentos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TiposDocumentos') ? [] : ['className' => 'App\Model\Table\TiposDocumentosTable'];
        $this->TiposDocumentos = TableRegistry::get('TiposDocumentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TiposDocumentos);

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
