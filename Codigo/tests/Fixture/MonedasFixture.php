<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MonedasFixture
 *
 */
class MonedasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'codigo' => ['type' => 'string', 'length' => 10, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'moneda' => ['type' => 'string', 'length' => 50, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'pais' => ['type' => 'string', 'length' => 10, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['codigo'], 'length' => []],
            'monedas_pais_fkey' => ['type' => 'foreign', 'columns' => ['pais'], 'references' => ['paises', 'codigo'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'codigo' => '5ece6285-e76c-4be8-82c6-4a91e561a609',
            'moneda' => 'Lorem ipsum dolor sit amet',
            'pais' => 'Lorem ip'
        ],
    ];
}
