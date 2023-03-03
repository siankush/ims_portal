<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InsurancesPolicy Entity
 *
 * @property int $id
 * @property int $insurance_company_id
 * @property string $insurance_type_name
 * @property int $insurance_type_code
 * @property float $premium
 * @property \Cake\I18n\FrozenTime $effective_date
 * @property string $term_length
 * @property string $status
 * @property string $deleted
 */
class InsurancesPolicy extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'insurance_company_id' => true,
        'insurance_type_name' => true,
        'insurance_type_code' => true,
        'premium' => true,
        'effective_date' => true,
        'term_length' => true,
        'status' => true,
        'deleted' => true,
    ];
}
