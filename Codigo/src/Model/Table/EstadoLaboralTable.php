<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EstadoLaboral Model
 *
 * @method \App\Model\Entity\EstadoLaboral get($primaryKey, $options = [])
 * @method \App\Model\Entity\EstadoLaboral newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EstadoLaboral[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EstadoLaboral|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EstadoLaboral patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EstadoLaboral[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EstadoLaboral findOrCreate($search, callable $callback = null)
 */
class EstadoLaboralTable extends Table
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

        $this->table('estado_laboral');
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
            ->allowEmpty('estado');

        return $validator;
    }
}
