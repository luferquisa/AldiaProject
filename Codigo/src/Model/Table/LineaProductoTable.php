<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LineaProducto Model
 *
 * @method \App\Model\Entity\LineaProducto get($primaryKey, $options = [])
 * @method \App\Model\Entity\LineaProducto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LineaProducto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LineaProducto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LineaProducto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LineaProducto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LineaProducto findOrCreate($search, callable $callback = null)
 */
class LineaProductoTable extends Table
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

        $this->table('linea_producto');
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

        $validator
            ->integer('recurso')
            ->allowEmpty('recurso');

        return $validator;
    }
}
