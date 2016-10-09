<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposDocumentosIdentidadTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposDocumentosIdentidadTable Test Case
 */
class TiposDocumentosIdentidadTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposDocumentosIdentidadTable
     */
    public $TiposDocumentosIdentidad;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipos_documentos_identidad'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TiposDocumentosIdentidad') ? [] : ['className' => 'App\Model\Table\TiposDocumentosIdentidadTable'];
        $this->TiposDocumentosIdentidad = TableRegistry::get('TiposDocumentosIdentidad', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TiposDocumentosIdentidad);

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
