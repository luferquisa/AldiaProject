<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TiposDocumento Entity
 *
 * @property int $id
 * @property int $grupo_documento
 * @property string $nombre_documento
 * @property string $estado
 */
class TiposDocumento extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
