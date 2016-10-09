<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CajaCompensacion Model
 *
 * @method \App\Model\Entity\CajaCompensacion get($primaryKey, $options = [])
 * @method \App\Model\Entity\CajaCompensacion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CajaCompensacion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CajaCompensacion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CajaCompensacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CajaCompensacion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CajaCompensacion findOrCreate($search, callable $callback = null)
 */
class CajaCompensacionTable extends Table
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

        $this->table('caja_compensacion');
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
            ->allowEmpty('caja');

        return $validator;
    }
}
