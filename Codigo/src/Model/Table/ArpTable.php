<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Arp Model
 *
 * @method \App\Model\Entity\Arp get($primaryKey, $options = [])
 * @method \App\Model\Entity\Arp newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Arp[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Arp|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Arp patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Arp[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Arp findOrCreate($search, callable $callback = null)
 */
class ArpTable extends Table
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

        $this->table('arp');
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
            ->allowEmpty('arp');

        return $validator;
    }
}
