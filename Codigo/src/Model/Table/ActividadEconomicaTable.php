<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ActividadEconomica Model
 *
 * @method \App\Model\Entity\ActividadEconomica get($primaryKey, $options = [])
 * @method \App\Model\Entity\ActividadEconomica newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ActividadEconomica[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ActividadEconomica|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ActividadEconomica patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ActividadEconomica[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ActividadEconomica findOrCreate($search, callable $callback = null)
 */
class ActividadEconomicaTable extends Table
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

        $this->table('actividad_economica');
        $this->displayField('codigo');
        $this->primaryKey('codigo');
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
            ->allowEmpty('codigo', 'create');

        $validator
            ->allowEmpty('actividad');

        return $validator;
    }
}
