<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ContactsListing> $contactsListing
 */
?>
<div class="contactsListing index content">
    <?= $this->Html->link(__('New Contacts Listing'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Contacts Listing') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contactsListing as $contactsListing): ?>
                <tr>
                    <td><?= $this->Number->format($contactsListing->id) ?></td>
                    <td><?= $contactsListing->has('user') ? $this->Html->link($contactsListing->user->id, ['controller' => 'Users', 'action' => 'view', $contactsListing->user->id]) : '' ?></td>
                    <td><?= h($contactsListing->name) ?></td>
                    <td><?= h($contactsListing->email) ?></td>
                    <td><?= h($contactsListing->phone) ?></td>
                    <td><?= h($contactsListing->address) ?></td>
                    <td><?= h($contactsListing->status) ?></td>
                    <td><?= h($contactsListing->created_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $contactsListing->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contactsListing->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contactsListing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactsListing->id)]) ?>
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
