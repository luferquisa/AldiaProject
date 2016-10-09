<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cesantias Model
 *
 * @method \App\Model\Entity\Cesantia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cesantia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cesantia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cesantia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cesantia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cesantia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cesantia findOrCreate($search, callable $callback = null)
 */
class CesantiasTable extends Table
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

        $this->table('cesantias');
        $this->displayField('int');
        $this->primaryKey('int');
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
            ->integer('int')
            ->allowEmpty('int', 'create');

        $validator
            ->allowEmpty('cesantias');

        return $validator;
    }
}
