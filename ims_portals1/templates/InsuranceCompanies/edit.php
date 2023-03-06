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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $insuranceCompany->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $insuranceCompany->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Insurance Companies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="insuranceCompanies form content">
            <?= $this->Form->create($insuranceCompany) ?>
            <fieldset>
                <legend><?= __('Edit Insurance Company') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
