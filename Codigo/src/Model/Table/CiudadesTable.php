<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ciudades Model
 *
 * @method \App\Model\Entity\Ciudade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ciudade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ciudade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ciudade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ciudade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ciudade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ciudade findOrCreate($search, callable $callback = null)
 */
class CiudadesTable extends Table
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

        $this->table('ciudades');
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
            ->allowEmpty('ciudad');

        $validator
            ->allowEmpty('pais');

        return $validator;
    }
}
