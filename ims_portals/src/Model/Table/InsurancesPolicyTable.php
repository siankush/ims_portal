<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InsurancesPolicy Model
 *
 * @method \App\Model\Entity\InsurancesPolicy newEmptyEntity()
 * @method \App\Model\Entity\InsurancesPolicy newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\InsurancesPolicy[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InsurancesPolicy get($primaryKey, $options = [])
 * @method \App\Model\Entity\InsurancesPolicy findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\InsurancesPolicy patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InsurancesPolicy[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\InsurancesPolicy|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InsurancesPolicy saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InsurancesPolicy[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\InsurancesPolicy[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\InsurancesPolicy[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\InsurancesPolicy[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class InsurancesPolicyTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('insurances_policy');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->belongsTo('InsurancesCompany', [
            'foreignKey' => 'insurance_company_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('insurance_company_id')
            ->requirePresence('insurance_company_id', 'create')
            ->notEmptyString('insurance_company_id');

        $validator
            ->scalar('insurance_type_name')
            ->maxLength('insurance_type_name', 150)
            ->requirePresence('insurance_type_name', 'create')
            ->notEmptyString('insurance_type_name');

        $validator
            ->integer('insurance_type_code')
            ->requirePresence('insurance_type_code', 'create')
            ->notEmptyString('insurance_type_code');

        $validator
            ->numeric('premium')
            ->requirePresence('premium', 'create')
            ->notEmptyString('premium');

        $validator
            ->dateTime('effective_date')
            ->notEmptyDateTime('effective_date');

        $validator
            ->scalar('term_length')
            ->maxLength('term_length', 50)
            ->requirePresence('term_length', 'create')
            ->notEmptyString('term_length');

        $validator
            ->scalar('status')
            ->notEmptyString('status');

        $validator
            ->scalar('deleted')
            ->notEmptyString('deleted');

        return $validator;
    }
}
