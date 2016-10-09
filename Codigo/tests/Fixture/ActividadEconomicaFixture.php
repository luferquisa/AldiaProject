<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ActividadEconomicaFixture
 *
 */
class ActividadEconomicaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'actividad_economica';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'codigo' => ['type' => 'string', 'length' => 20, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'actividad' => ['type' => 'string', 'length' => 50, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
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
            'codigo' => 'dd5b0835-56a1-4475-b2b8-0151f2a726fe',
            'actividad' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
