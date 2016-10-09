<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sucursales Model
 *
 * @method \App\Model\Entity\Sucursale get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sucursale newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sucursale[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sucursale|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sucursale patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sucursale[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sucursale findOrCreate($search, callable $callback = null)
 */
class SucursalesTable extends Table
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

        $this->table('sucursales');
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
            ->allowEmpty('sucursal');

        $validator
            ->integer('ciudad')
            ->allowEmpty('ciudad');

        $validator
            ->integer('empresa')
            ->allowEmpty('empresa');

        return $validator;
    }
}
