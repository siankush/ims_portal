<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InsurancesCompany Entity
 *
 * @property int $id
 * @property string $insurance_company_name
 * @property string $status
 * @property string $deleted
 * @property \Cake\I18n\FrozenTime $created_at
 */
class InsurancesCompany extends Entity
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
        'insurance_company_name' => true,
        'status' => true,
        'deleted' => true,
        'created_at' => true,
    ];
}
