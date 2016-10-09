<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SubcentroCosto Model
 *
 * @method \App\Model\Entity\SubcentroCosto get($primaryKey, $options = [])
 * @method \App\Model\Entity\SubcentroCosto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SubcentroCosto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SubcentroCosto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SubcentroCosto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SubcentroCosto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SubcentroCosto findOrCreate($search, callable $callback = null)
 */
class SubcentroCostoTable extends Table
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

        $this->table('subcentro_costo');
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
            ->allowEmpty('subcentros_costos');

        $validator
            ->integer('centro_costo')
            ->allowEmpty('centro_costo');

        return $validator;
    }
}
