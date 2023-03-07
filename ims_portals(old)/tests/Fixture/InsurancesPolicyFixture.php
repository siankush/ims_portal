<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InsurancesPolicyFixture
 */
class InsurancesPolicyFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'insurances_policy';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'insurance_company_id' => 1,
                'insurance_type_name' => 'Lorem ipsum dolor sit amet',
                'insurance_type_code' => 1,
                'premium' => 1,
                'effective_date' => 1677754982,
                'term_length' => 'Lorem ipsum dolor sit amet',
                'status' => 'Lorem ipsum dolor sit amet',
                'deleted' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
