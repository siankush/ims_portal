<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InsurancePolicy $insurancePolicy
 * @var string[]|\Cake\Collection\CollectionInterface $insuranceCompanies
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $insurancePolicy->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $insurancePolicy->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Insurance Policies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="insurancePolicies form content">
            <?= $this->Form->create($insurancePolicy) ?>
            <fieldset>
                <legend><?= __('Edit Insurance Policy') ?></legend>
                <?php
                    echo $this->Form->control('insurance_company_id', ['options' => $insuranceCompanies]);
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
