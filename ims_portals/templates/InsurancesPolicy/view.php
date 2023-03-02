<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InsurancesPolicy $insurancesPolicy
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Insurances Policy'), ['action' => 'edit', $insurancesPolicy->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Insurances Policy'), ['action' => 'delete', $insurancesPolicy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $insurancesPolicy->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Insurances Policy'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Insurances Policy'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="insurancesPolicy view content">
            <h3><?= h($insurancesPolicy->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Insurance Type Name') ?></th>
                    <td><?= h($insurancesPolicy->insurance_type_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term Length') ?></th>
                    <td><?= h($insurancesPolicy->term_length) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($insurancesPolicy->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= h($insurancesPolicy->deleted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($insurancesPolicy->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Insurance Company Id') ?></th>
                    <td><?= $this->Number->format($insurancesPolicy->insurance_company_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Insurance Type Code') ?></th>
                    <td><?= $this->Number->format($insurancesPolicy->insurance_type_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Premium') ?></th>
                    <td><?= $this->Number->format($insurancesPolicy->premium) ?></td>
                </tr>
                <tr>
                    <th><?= __('Effective Date') ?></th>
                    <td><?= h($insurancesPolicy->effective_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
