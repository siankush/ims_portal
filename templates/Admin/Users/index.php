
<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\InsurancesCompany> $insurancesCompany
 */
?>
<?php echo $this->element('sidebar1') ?>
<style>
.policy {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  color: black!important;
}
.edit-user {
  width: 100%;
  background-color: #ff5722;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.modal-body {
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1rem;
    padding-top: 1rem;
  padding-top: 0px;
  margin-top: -167px;
}
</style>


<div class="insurancesCompany index content" style="margin-top: 120px;" id="change-status">

  <div class="container-fluid">
 <h1 style="padding-bottom:70px; text-align:center;font-weight:800;font-size:35px;">USERS LISTINGS</h1>
        <table class="table table-hover" >

            <thead>
            <tr id="#tablerow_user">
            <th><?= $this->Paginator->sort('id') ?></th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE.NO</th>
                    <th>ADDRESS</th>
                    <th>STATUS</th>
                    <th>DELETED</th>
                    <th>CREATED AT</th>
                    <th class="actions">ACTIONS</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
                <?php if($user->deleted==1): ?>
            <tr id="data<?php echo $user->id;?>" class="tabledata_user">
            <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->first_name) ?></td>
                    <td><?= h($user->last_name) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->contact_number) ?></td>
                    <td><?= h($user->address) ?></td>
                    <td><?= h($user->status) ?></td>
                    <td><?= h($user->deleted) ?></td>
                    <td><?= h($user->created_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__(''), ['action' => 'view', $user->id],['class'=>'fa-solid fa-eye']) ?>

                        <i class="fa-solid fa-pen-to-square get-userinfo " data-bs-toggle="modal" data-bs-target="#myModal" style="color: orange; font-size: 18px;" edituser-id ="<?= $user->id ?>"></i>
                        <i class="fa-solid fa-trash-can delete-user-info" style="color: red; font-size: 18px; cursor: pointer;" status-id ="<?= $user->deleted?>" deleteuser-id ="<?= $user->id?>"></i>                          

                    </td>
                   
            </tr>
            <?php endif; ?>
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


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
       </div>

       <!-- Modal body -->
       <div class="modal-body">
        
   
   <div class="column-responsive column-80">
     <div class="insurancesCompany view content">
       <h1 style="padding-bottom:70px; text-align:center;font-weight:800;font-size:35px;color:white">INSURANCE USER EDIT</h1>

       <?= $this->Form->create($user,['id'=>'formid']) ?>
       <input type="hidden" id="userlisting_id" name="id">
       
           <fieldset>
               <legend><?= __('Edit User') ?></legend>
               <?php
                   echo $this->Form->control('first_name',['class'=>'policy','id'=>'first_name']);
                   echo $this->Form->control('last_name',['class'=>'policy','id'=>'last_name']);
                   echo $this->Form->control('email',['class'=>'policy','id'=>'email']);
                   echo $this->Form->control('contact_number',['class'=>'policy','id'=>'contact_number']);
                   echo $this->Form->control('address',['class'=>'policy', 'id'=> 'address']);
               ?>
           </fieldset>
           <?= $this->Form->button(__('Submit'),['class'=>'edit-user']) ?>
           <?= $this->Form->end() ?>
   </div>
</div>
    

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div> -->

    </div>
  </div>
</div> 
<?= $this->Html->script('adminscript') ?>