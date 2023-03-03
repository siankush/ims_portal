<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InsurancePolicy $insurancePolicy
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Insurance Policy'), ['action' => 'edit', $insurancePolicy->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Insurance Policy'), ['action' => 'delete', $insurancePolicy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $insurancePolicy->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Insurance Policies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Insurance Policy'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="insurancePolicies view content">
            <h3><?= h($insurancePolicy->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Insurance Company') ?></th>
                    <td><?= $insurancePolicy->has('insurance_company') ? $this->Html->link($insurancePolicy->insurance_company->id, ['controller' => 'InsuranceCompanies', 'action' => 'view', $insurancePolicy->insurance_company->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($insurancePolicy->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($insurancePolicy->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
