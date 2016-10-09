<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TiposDocumentosIdentidadFixture
 *
 */
class TiposDocumentosIdentidadFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tipos_documentos_identidad';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'codigo' => ['type' => 'string', 'length' => 30, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'tipo' => ['type' => 'string', 'length' => 30, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['codigo'], 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'codigo' => '52f4c25e-d52a-49df-ad71-188e74efb7b4',
            'tipo' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
