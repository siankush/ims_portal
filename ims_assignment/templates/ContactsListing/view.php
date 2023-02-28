<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactsListing $contactsListing
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Contacts Listing'), ['action' => 'edit', $contactsListing->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Contacts Listing'), ['action' => 'delete', $contactsListing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactsListing->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Contacts Listing'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Contacts Listing'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contactsListing view content">
            <h3><?= h($contactsListing->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $contactsListing->has('user') ? $this->Html->link($contactsListing->user->id, ['controller' => 'Users', 'action' => 'view', $contactsListing->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($contactsListing->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($contactsListing->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($contactsListing->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($contactsListing->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($contactsListing->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($contactsListing->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($contactsListing->created_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
