<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClienteEmpresasFixture
 *
 */
class ClienteEmpresasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'empresa' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'ciudad' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'division' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'comercial' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'cliente_empresas_ciudad_fkey' => ['type' => 'foreign', 'columns' => ['ciudad'], 'references' => ['ciudades', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'cliente_empresas_comercial_fkey' => ['type' => 'foreign', 'columns' => ['comercial'], 'references' => ['cargos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'cliente_empresas_division_fkey' => ['type' => 'foreign', 'columns' => ['division'], 'references' => ['division', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'cliente_empresas_empresa_fkey' => ['type' => 'foreign', 'columns' => ['empresa'], 'references' => ['empresas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'id' => 1,
            'empresa' => 1,
            'ciudad' => 1,
            'division' => 1,
            'comercial' => 1
        ],
    ];
}
