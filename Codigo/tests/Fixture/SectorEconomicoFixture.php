<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SectorEconomicoFixture
 *
 */
class SectorEconomicoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'sector_economico';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'codigo' => ['type' => 'string', 'length' => 20, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'sector' => ['type' => 'string', 'length' => 50, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
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
            'codigo' => 'eb14cb1f-1a06-46f0-b058-cd5e6800f3a7',
            'sector' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
