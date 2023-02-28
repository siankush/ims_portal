<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactsListing $contactsListing
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contactsListing->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contactsListing->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Contacts Listing'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contactsListing form content">
            <?= $this->Form->create($contactsListing) ?>
            <fieldset>
                <legend><?= __('Edit Contacts Listing') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('address');
                    echo $this->Form->control('status');
                    echo $this->Form->control('created_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
