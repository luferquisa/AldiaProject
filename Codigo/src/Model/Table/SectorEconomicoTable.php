<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SectorEconomico Model
 *
 * @method \App\Model\Entity\SectorEconomico get($primaryKey, $options = [])
 * @method \App\Model\Entity\SectorEconomico newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SectorEconomico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SectorEconomico|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SectorEconomico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SectorEconomico[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SectorEconomico findOrCreate($search, callable $callback = null)
 */
class SectorEconomicoTable extends Table
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

        $this->table('sector_economico');
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
            ->allowEmpty('sector');

        return $validator;
    }
}
