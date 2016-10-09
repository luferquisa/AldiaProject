<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pensiones Model
 *
 * @method \App\Model\Entity\Pensione get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pensione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pensione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pensione|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pensione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pensione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pensione findOrCreate($search, callable $callback = null)
 */
class PensionesTable extends Table
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

        $this->table('pensiones');
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
            ->allowEmpty('pension');

        return $validator;
    }
}
