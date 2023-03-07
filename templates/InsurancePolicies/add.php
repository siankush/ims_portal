<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InsurancePolicy $insurancePolicy
 * @var \Cake\Collection\CollectionInterface|string[] $insuranceCompanies
 */

?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Insurance Policies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="insurancePolicies form content">
            <?= $this->Form->create($insurancePolicy) ?>
            <fieldset>
                <legend><?= __('Add Insurance Policy') ?></legend>
              
                <?php
                    echo $this->Form->control('insurance_company_id');
                    echo $this->Form->control('name');                    
                    echo $this->Form->control('premium');                    
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
