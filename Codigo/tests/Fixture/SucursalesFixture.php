<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SucursalesFixture
 *
 */
class SucursalesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'sucursal' => ['type' => 'string', 'length' => 5, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'ciudad' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'empresa' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'sucursales_ciudad_fkey' => ['type' => 'foreign', 'columns' => ['ciudad'], 'references' => ['ciudades', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'sucursales_empresa_fkey' => ['type' => 'foreign', 'columns' => ['empresa'], 'references' => ['empresas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'sucursal' => 'Lor',
            'ciudad' => 1,
            'empresa' => 1
        ],
    ];
}
