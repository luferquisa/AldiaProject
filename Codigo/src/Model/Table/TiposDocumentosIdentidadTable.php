<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TiposDocumentosIdentidad Model
 *
 * @method \App\Model\Entity\TiposDocumentosIdentidad get($primaryKey, $options = [])
 * @method \App\Model\Entity\TiposDocumentosIdentidad newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TiposDocumentosIdentidad[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TiposDocumentosIdentidad|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TiposDocumentosIdentidad patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TiposDocumentosIdentidad[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TiposDocumentosIdentidad findOrCreate($search, callable $callback = null)
 */
class TiposDocumentosIdentidadTable extends Table
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

        $this->table('tipos_documentos_identidad');
        $this->displayField('codigo');
        $this->primaryKey('codigo');
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
            ->allowEmpty('tipo');

        return $validator;
    }
}
