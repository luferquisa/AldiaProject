<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Recurso Entity
 *
 * @property int $id
 * @property string $apellido1
 * @property string $apellido2
 * @property string $nombre1
 * @property string $nombre2
 * @property string $tipo_documento
 * @property string $documento
 * @property int $ciuda_exp
 * @property \Cake\I18n\Time $fecha_nac
 * @property int $ciudad_nac
 * @property string $genero
 * @property string $libreta_mil
 * @property string $clase_lib_mil
 * @property string $dis_mil
 * @property string $grupo_san
 * @property string $rh
 * @property int $estado_civil
 * @property string $nacionalidad
 * @property string $direccion_res
 * @property int $ciudad_res
 * @property string $telefono_res
 * @property int $personas_cargo
 * @property \Cake\I18n\Time $fecha_ingreso
 * @property \Cake\I18n\Time $fecha_egreso
 * @property int $empresa
 * @property int $sucursal
 * @property int $cco
 * @property int $cargo
 * @property int $tipo_cont
 * @property int $estado_lab
 * @property int $fondo_riesgo
 * @property int $fondo_pension
 * @property int $eps
 * @property int $cesantias
 * @property int $caja_compensacion
 */
class Recurso extends Entity
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
