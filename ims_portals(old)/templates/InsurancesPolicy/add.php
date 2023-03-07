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
            <?= $this->Html->link(__('List Insurances Policy'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="insurancesPolicy form content">
            <?= $this->Form->create($insurancesPolicy) ?>
            <fieldset>
                <legend><?= __('Add Insurances Policy') ?></legend>
                <?php
                    echo $this->Form->control('insurance_company_id');
                    echo $this->Form->control('insurance_type_name');
                    echo $this->Form->control('insurance_type_code');
                    echo $this->Form->control('premium');
                    echo $this->Form->control('effective_date');
                    echo $this->Form->control('term_length');
                    echo $this->Form->control('status');
                    echo $this->Form->control('deleted');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
