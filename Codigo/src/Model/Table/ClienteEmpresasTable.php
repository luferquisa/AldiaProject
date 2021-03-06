<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClienteEmpresas Model
 *
 * @method \App\Model\Entity\ClienteEmpresa get($primaryKey, $options = [])
 * @method \App\Model\Entity\ClienteEmpresa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ClienteEmpresa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ClienteEmpresa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ClienteEmpresa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ClienteEmpresa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ClienteEmpresa findOrCreate($search, callable $callback = null)
 */
class ClienteEmpresasTable extends Table
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

        $this->table('cliente_empresas');
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
            ->integer('empresa')
            ->allowEmpty('empresa');

        $validator
            ->integer('ciudad')
            ->allowEmpty('ciudad');

        $validator
            ->integer('division')
            ->allowEmpty('division');

        $validator
            ->integer('comercial')
            ->allowEmpty('comercial');

        return $validator;
    }
}
