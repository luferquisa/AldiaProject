<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Eps Model
 *
 * @method \App\Model\Entity\Eps get($primaryKey, $options = [])
 * @method \App\Model\Entity\Eps newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Eps[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Eps|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Eps patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Eps[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Eps findOrCreate($search, callable $callback = null)
 */
class EpsTable extends Table
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

        $this->table('eps');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('eps');

        return $validator;
    }
}
