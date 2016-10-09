<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Recursos Model
 *
 * @method \App\Model\Entity\Recurso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Recurso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Recurso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Recurso|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Recurso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Recurso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Recurso findOrCreate($search, callable $callback = null)
 */
class RecursosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('recursos');
        $this->displayField('id');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('apellido1');

        $validator
            ->allowEmpty('apellido2');

        $validator
            ->allowEmpty('nombre1');

        $validator
            ->allowEmpty('nombre2');

        $validator
            ->allowEmpty('tipo_documento');

        $validator
            ->allowEmpty('documento');

        $validator
            ->integer('ciuda_exp')
            ->allowEmpty('ciuda_exp');

        $validator
            ->date('fecha_nac')
            ->allowEmpty('fecha_nac');

        $validator
            ->integer('ciudad_nac')
            ->allowEmpty('ciudad_nac');

        $validator
            ->allowEmpty('genero');

        $validator
            ->allowEmpty('libreta_mil');

        $validator
            ->allowEmpty('clase_lib_mil');

        $validator
            ->allowEmpty('dis_mil');

        $validator
            ->allowEmpty('grupo_san');

        $validator
            ->allowEmpty('rh');

        $validator
            ->integer('estado_civil')
            ->allowEmpty('estado_civil');

        $validator
            ->allowEmpty('nacionalidad');

        $validator
            ->allowEmpty('direccion_res');

        $validator
            ->integer('ciudad_res')
            ->allowEmpty('ciudad_res');

        $validator
            ->allowEmpty('telefono_res');

        $validator
            ->integer('personas_cargo')
            ->allowEmpty('personas_cargo');

        $validator
            ->date('fecha_ingreso')
            ->allowEmpty('fecha_ingreso');

        $validator
            ->date('fecha_egreso')
            ->allowEmpty('fecha_egreso');

        $validator
            ->integer('empresa')
            ->allowEmpty('empresa');

        $validator
            ->integer('sucursal')
            ->allowEmpty('sucursal');

        $validator
            ->integer('cco')
            ->allowEmpty('cco');

        $validator
            ->integer('cargo')
            ->allowEmpty('cargo');

        $validator
            ->integer('tipo_cont')
            ->allowEmpty('tipo_cont');

        $validator
            ->integer('estado_lab')
            ->allowEmpty('estado_lab');

        $validator
            ->integer('fondo_riesgo')
            ->allowEmpty('fondo_riesgo');

        $validator
            ->integer('fondo_pension')
            ->allowEmpty('fondo_pension');

        $validator
            ->integer('eps')
            ->allowEmpty('eps');

        $validator
            ->integer('cesantias')
            ->allowEmpty('cesantias');

        $validator
            ->integer('caja_compensacion')
            ->allowEmpty('caja_compensacion');

        return $validator;
    }
}
