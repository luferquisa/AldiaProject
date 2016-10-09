<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CentroCosto Model
 *
 * @method \App\Model\Entity\CentroCosto get($primaryKey, $options = [])
 * @method \App\Model\Entity\CentroCosto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CentroCosto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CentroCosto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CentroCosto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CentroCosto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CentroCosto findOrCreate($search, callable $callback = null)
 */
class CentroCostoTable extends Table
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

        $this->table('centro_costo');
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
            ->allowEmpty('centro_costo');

        $validator
            ->integer('empresa')
            ->allowEmpty('empresa');

        return $validator;
    }
}
