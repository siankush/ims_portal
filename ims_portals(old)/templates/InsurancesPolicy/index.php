<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\InsurancesPolicy> $insurancesPolicy
 */
?>
<div class="insurancesPolicy index content">
    <?= $this->Html->link(__('New Insurances Policy'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Insurances Policy') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('insurance_company_id') ?></th>
                    <th><?= $this->Paginator->sort('insurance_type_name') ?></th>
                    <th><?= $this->Paginator->sort('insurance_type_code') ?></th>
                    <th><?= $this->Paginator->sort('premium') ?></th>
                    <th><?= $this->Paginator->sort('effective_date') ?></th>
                    <th><?= $this->Paginator->sort('term_length') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($insurancesPolicy as $insurancesPolicy): ?>
                <tr>
                    <td><?= $this->Number->format($insurancesPolicy->id) ?></td>
                    <td><?= $this->Number->format($insurancesPolicy->insurance_company_id) ?></td>
                    <td><?= h($insurancesPolicy->insurance_type_name) ?></td>
                    <td><?= $this->Number->format($insurancesPolicy->insurance_type_code) ?></td>
                    <td><?= $this->Number->format($insurancesPolicy->premium) ?></td>
                    <td><?= h($insurancesPolicy->effective_date) ?></td>
                    <td><?= h($insurancesPolicy->term_length) ?></td>
                    <td><?= h($insurancesPolicy->status) ?></td>
                    <td><?= h($insurancesPolicy->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $insurancesPolicy->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $insurancesPolicy->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $insurancesPolicy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $insurancesPolicy->id)]) ?>
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
