<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GruposDocumentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GruposDocumentosTable Test Case
 */
class GruposDocumentosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GruposDocumentosTable
     */
    public $GruposDocumentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.grupos_documentos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GruposDocumentos') ? [] : ['className' => 'App\Model\Table\GruposDocumentosTable'];
        $this->GruposDocumentos = TableRegistry::get('GruposDocumentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GruposDocumentos);

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
