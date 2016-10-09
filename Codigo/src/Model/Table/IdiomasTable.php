<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Idiomas Model
 *
 * @method \App\Model\Entity\Idioma get($primaryKey, $options = [])
 * @method \App\Model\Entity\Idioma newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Idioma[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Idioma|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Idioma patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Idioma[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Idioma findOrCreate($search, callable $callback = null)
 */
class IdiomasTable extends Table
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

        $this->table('idiomas');
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
            ->allowEmpty('idioma');

        return $validator;
    }
}
