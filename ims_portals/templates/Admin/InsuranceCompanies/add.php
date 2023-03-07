<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InsuranceCompany $insuranceCompany
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Insurance Companies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="insuranceCompanies form content">
            <?= $this->Form->create($insuranceCompany) ?>
            <fieldset>
                <legend><?= __('Add Insurance Company') ?></legend>
                <?php
                    echo $this->Form->control('insurance_company_name');
                    echo $this->Form->control('status');
                    echo $this->Form->control('deleted');
                    echo $this->Form->control('created_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
