<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TiposDocumentos Model
 *
 * @method \App\Model\Entity\TiposDocumento get($primaryKey, $options = [])
 * @method \App\Model\Entity\TiposDocumento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TiposDocumento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TiposDocumento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TiposDocumento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TiposDocumento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TiposDocumento findOrCreate($search, callable $callback = null)
 */
class TiposDocumentosTable extends Table
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

        $this->table('tipos_documentos');
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
            ->integer('grupo_documento')
            ->allowEmpty('grupo_documento');

        $validator
            ->allowEmpty('nombre_documento');

        $validator
            ->allowEmpty('estado');

        return $validator;
    }
}
