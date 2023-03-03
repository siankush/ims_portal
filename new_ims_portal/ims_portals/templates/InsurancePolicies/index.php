<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\InsurancePolicy> $insurancePolicies
 */
?>
<div class="insurancePolicies index content">
    <?= $this->Html->link(__('New Insurance Policy'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Insurance Policies') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('insurance_company_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('premium') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($insurancePolicies as $insurancePolicy): ?>
                <tr>
                    <td><?= $this->Number->format($insurancePolicy->id) ?></td>
                    <td><?= $insurancePolicy->has('insurance_company') ? $this->Html->link($insurancePolicy->insurance_company->name, ['controller' => 'InsuranceCompanies', 'action' => 'view', $insurancePolicy->insurance_company->insurance_company_name]) : '' ?></td>                    
                    <td><?= h($insurancePolicy->name) ?></td>
                    <td><?= h($insurancePolicy->premium) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $insurancePolicy->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $insurancePolicy->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $insurancePolicy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $insurancePolicy->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
