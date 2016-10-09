<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ContactosCliente Model
 *
 * @method \App\Model\Entity\ContactosCliente get($primaryKey, $options = [])
 * @method \App\Model\Entity\ContactosCliente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ContactosCliente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ContactosCliente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ContactosCliente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ContactosCliente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ContactosCliente findOrCreate($search, callable $callback = null)
 */
class ContactosClienteTable extends Table
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

        $this->table('contactos_cliente');
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
            ->allowEmpty('titulo');

        $validator
            ->allowEmpty('nombre');

        $validator
            ->allowEmpty('telefono');

        $validator
            ->allowEmpty('extension');

        $validator
            ->allowEmpty('celular');

        $validator
            ->allowEmpty('correo');

        $validator
            ->allowEmpty('cargo');

        $validator
            ->integer('ciudad')
            ->allowEmpty('ciudad');

        return $validator;
    }
}
