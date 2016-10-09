<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EstadosCiviles Model
 *
 * @method \App\Model\Entity\EstadosCivile get($primaryKey, $options = [])
 * @method \App\Model\Entity\EstadosCivile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EstadosCivile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EstadosCivile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EstadosCivile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EstadosCivile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EstadosCivile findOrCreate($search, callable $callback = null)
 */
class EstadosCivilesTable extends Table
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

        $this->table('estados_civiles');
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
            ->allowEmpty('codigo', 'create');

        $validator
            ->allowEmpty('estado');

        return $validator;
    }
}
