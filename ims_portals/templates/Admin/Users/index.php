
<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\InsurancesCompany> $insurancesCompany
 */
?>

<?php echo $this->element('sidebar1') ?>

<div class="insurancesCompany index content" style="margin-top: 120px;">

<div class="container-fluid">
<h1 style="padding-bottom:70px; text-align:center;font-weight:800;font-size:35px;">USERS LISTINGS</h1>
        <table class="table table-hover" >

            <thead>
            <tr id="#tablerow_user">
                    <th>ID</th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE.NO</th>
                    <th>ADDRESS</th>
                    <th>STATUS</th>
                    <!-- <th>Delete status</th> -->
                    <th>CREATED AT</th>
                    <th class="actions">ACTIONS</th>
            </tr>
            </thead>
            <tbody>
            <?php $n = $this->Paginator->counter('{{start}}') ?>
            <?php foreach ($users as $user): ?>
            <?php if($user->deletestatus == 1) : ?>  
            <tr id="data<?php echo $user->id;?>" class="tabledata_user">
             <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->first_name) ?></td>
                    <td><?= h($user->last_name) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->contact_number) ?></td>
                    <td><?= h($user->address) ?></td>
                    <td><?= h($user->status) ?></td>
                    <!-- <td><?= h($user->deletestatus) ?></td> -->
                    <td><?= h($user->created_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__(''), ['action' => 'view', $user->id],['class'=>'fa-solid fa-eye']) ?>
                        <?= $this->Html->link(__(''), ['action' => 'edit', $user->id],['class'=>'fa-solid fa-pen-to-square']) ?>
                        <i class="fa-solid fa-trash-can delete-user-info" style="color: red; font-size: 18px; cursor: pointer;" status-id ="<?= $user->deletestatus?>" deleteuser-id ="<?= $user->id?>"></i>                          

                    </td>
                   
            </tr>
            <?php endif; ?>
            <?php $n++; ?>
            <?php endforeach; ?>

            </tbody>
        </table>
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
                   
</div>

<?= $this->Html->script('adminscript') ?>
