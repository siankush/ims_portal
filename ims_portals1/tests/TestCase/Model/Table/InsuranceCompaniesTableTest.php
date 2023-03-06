<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InsuranceCompaniesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InsuranceCompaniesTable Test Case
 */
class InsuranceCompaniesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InsuranceCompaniesTable
     */
    protected $InsuranceCompanies;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.InsuranceCompanies',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('InsuranceCompanies') ? [] : ['className' => InsuranceCompaniesTable::class];
        $this->InsuranceCompanies = $this->getTableLocator()->get('InsuranceCompanies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->InsuranceCompanies);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InsuranceCompaniesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
