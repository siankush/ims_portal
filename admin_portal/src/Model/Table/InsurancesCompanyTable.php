<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InsurancesCompany Model
 *
 * @method \App\Model\Entity\InsurancesCompany newEmptyEntity()
 * @method \App\Model\Entity\InsurancesCompany newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\InsurancesCompany[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InsurancesCompany get($primaryKey, $options = [])
 * @method \App\Model\Entity\InsurancesCompany findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\InsurancesCompany patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InsurancesCompany[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\InsurancesCompany|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InsurancesCompany saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InsurancesCompany[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\InsurancesCompany[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\InsurancesCompany[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\InsurancesCompany[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class InsurancesCompanyTable extends Table
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

        $this->setTable('insurances_company');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('insurance_company_name')
            ->maxLength('insurance_company_name', 255)
            ->requirePresence('insurance_company_name', 'create')
            ->notEmptyString('insurance_company_name');

        $validator
            ->scalar('status')
            ->notEmptyString('status');

        $validator
            ->scalar('deleted')
            ->notEmptyString('deleted');

        $validator
            ->dateTime('created_at')
            ->notEmptyDateTime('created_at');

        return $validator;
    }
}
