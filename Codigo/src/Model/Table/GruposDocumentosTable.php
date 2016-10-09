<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GruposDocumentos Model
 *
 * @method \App\Model\Entity\GruposDocumento get($primaryKey, $options = [])
 * @method \App\Model\Entity\GruposDocumento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GruposDocumento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GruposDocumento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GruposDocumento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GruposDocumento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GruposDocumento findOrCreate($search, callable $callback = null)
 */
class GruposDocumentosTable extends Table
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

        $this->table('grupos_documentos');
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
            ->allowEmpty('descripcion');

        return $validator;
    }
}
