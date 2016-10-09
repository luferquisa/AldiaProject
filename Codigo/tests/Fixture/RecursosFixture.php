<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RecursosFixture
 *
 */
class RecursosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'apellido1' => ['type' => 'string', 'length' => 50, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'apellido2' => ['type' => 'string', 'length' => 50, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'nombre1' => ['type' => 'string', 'length' => 50, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'nombre2' => ['type' => 'string', 'length' => 50, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'tipo_documento' => ['type' => 'string', 'length' => 30, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'documento' => ['type' => 'string', 'length' => 50, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'ciuda_exp' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'fecha_nac' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'ciudad_nac' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'genero' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'libreta_mil' => ['type' => 'string', 'length' => 15, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'clase_lib_mil' => ['type' => 'text', 'length' => null, 'default' => 'No aplica', 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'dis_mil' => ['type' => 'string', 'length' => 50, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'grupo_san' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'rh' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'estado_civil' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'nacionalidad' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'direccion_res' => ['type' => 'string', 'length' => 50, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'ciudad_res' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'telefono_res' => ['type' => 'string', 'length' => 30, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'personas_cargo' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'fecha_ingreso' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'fecha_egreso' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'empresa' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'sucursal' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'cco' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'cargo' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'tipo_cont' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'estado_lab' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'fondo_riesgo' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'fondo_pension' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'eps' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'cesantias' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'caja_compensacion' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'recursos_caja_compensacion_fkey' => ['type' => 'foreign', 'columns' => ['caja_compensacion'], 'references' => ['caja_compensacion', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'recursos_cargo_fkey' => ['type' => 'foreign', 'columns' => ['cargo'], 'references' => ['cargos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'recursos_cco_fkey' => ['type' => 'foreign', 'columns' => ['cco'], 'references' => ['centro_costo', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'recursos_cesantias_fkey' => ['type' => 'foreign', 'columns' => ['cesantias'], 'references' => ['cesantias', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'recursos_ciuda_exp_fkey' => ['type' => 'foreign', 'columns' => ['ciuda_exp'], 'references' => ['ciudades', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'recursos_ciudad_nac_fkey' => ['type' => 'foreign', 'columns' => ['ciudad_nac'], 'references' => ['ciudades', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'recursos_ciudad_res_fkey' => ['type' => 'foreign', 'columns' => ['ciudad_res'], 'references' => ['ciudades', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'recursos_empresa_fkey' => ['type' => 'foreign', 'columns' => ['empresa'], 'references' => ['empresas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'recursos_eps_fkey' => ['type' => 'foreign', 'columns' => ['eps'], 'references' => ['eps', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'recursos_estado_civil_fkey' => ['type' => 'foreign', 'columns' => ['estado_civil'], 'references' => ['estados_civiles', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'recursos_estado_lab_fkey' => ['type' => 'foreign', 'columns' => ['estado_lab'], 'references' => ['estado_laboral', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'recursos_fondo_pension_fkey' => ['type' => 'foreign', 'columns' => ['fondo_pension'], 'references' => ['pensiones', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'recursos_fondo_riesgo_fkey' => ['type' => 'foreign', 'columns' => ['fondo_riesgo'], 'references' => ['arp', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'recursos_sucursal_fkey' => ['type' => 'foreign', 'columns' => ['sucursal'], 'references' => ['sucursales', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'recursos_tipo_cont_fkey' => ['type' => 'foreign', 'columns' => ['tipo_cont'], 'references' => ['tipos_contratos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'recursos_tipo_documento_fkey' => ['type' => 'foreign', 'columns' => ['tipo_documento'], 'references' => ['tipos_documentos', 'codigo'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'apellido1' => 'Lorem ipsum dolor sit amet',
            'apellido2' => 'Lorem ipsum dolor sit amet',
            'nombre1' => 'Lorem ipsum dolor sit amet',
            'nombre2' => 'Lorem ipsum dolor sit amet',
            'tipo_documento' => 'Lorem ipsum dolor sit amet',
            'documento' => 'Lorem ipsum dolor sit amet',
            'ciuda_exp' => 1,
            'fecha_nac' => '2016-09-06',
            'ciudad_nac' => 1,
            'genero' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'libreta_mil' => 'Lorem ipsum d',
            'clase_lib_mil' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'dis_mil' => 'Lorem ipsum dolor sit amet',
            'grupo_san' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'rh' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'estado_civil' => 1,
            'nacionalidad' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'direccion_res' => 'Lorem ipsum dolor sit amet',
            'ciudad_res' => 1,
            'telefono_res' => 'Lorem ipsum dolor sit amet',
            'personas_cargo' => 1,
            'fecha_ingreso' => '2016-09-06',
            'fecha_egreso' => '2016-09-06',
            'empresa' => 1,
            'sucursal' => 1,
            'cco' => 1,
            'cargo' => 1,
            'tipo_cont' => 1,
            'estado_lab' => 1,
            'fondo_riesgo' => 1,
            'fondo_pension' => 1,
            'eps' => 1,
            'cesantias' => 1,
            'caja_compensacion' => 1
        ],
    ];
}
