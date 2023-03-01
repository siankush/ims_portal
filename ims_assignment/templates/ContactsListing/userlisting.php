
<div class="container-scroller" id="change-status">
    <!-- partial:../../partials/_navbar.html -->
      <?php echo $this->element('sidebar'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

              
            <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                    <?= $this->Html->link(__('Add'), ['controller'=>'ContactsListing','action' => 'add'], ['class' => 'btn btn-primary float-right']) ?>
                  <h4 class="card-title">Striped Table</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Sr.
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Phone
                          </th>
                          <th>
                            Address
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $n = $this->Paginator->counter('{{start}}') ?>
                        <?php foreach ($contactsListing  as $contactlist) :?> 
                        <?php if($contactlist->deletestatus == 1) :?>
                        <tr id="data<?php echo $contactlist->id;?>">
                          <td class="py-1">
                          <?= h($n); ?>
                          </td>
                          <td>
                            <?= h($contactlist->name); ?>
                          </td>
                          <td>
                          <?= h($contactlist->email); ?>
                          </td>
                          <td>
                          <?= h($contactlist->phone); ?>
                          </td>
                          <td>
                          <?= h($contactlist->address); ?>
                          </td>
                          <td class="align-middle text-sm">
                          <!-- <?= h($contactlist->status); ?>
                          <span class="badge badge-sm bg-gradient-success">Online</span>
                          <span class="badge badge-sm bg-gradient-secondary">Offline</span> -->
                          <?php  if($contactlist->status == 1) : ?>
                            
                            <?= $this->Form->postLink(__('Online'),['action' => 'userstatus', $contactlist->id, $contactlist->status],['class'=>'badge badge-sm bg-gradient-success'], ['confirm' => __('Are you sure you want to Inactive ?', $contactlist->id)]) ?>
                            <?php else : ?>
                                
                                <?= $this->Form->postLink(__('Offline'), ['action' => 'userstatus', $contactlist->id, $contactlist->status],['class'=>'badge badge-sm bg-gradient-secondary'], ['confirm' => __('Are you sure you want to Active ?', $contactlist->id)]) ?>
                                <?php endif; ?> 

                         </td>
                          <td>
                          <i class="fa-solid fa-pen-to-square edit-user" data-bs-toggle="modal" data-bs-target="#myModal" style="color: orange; font-size: 18px;" edituser-id ="<?= $contactlist->id ?>"></i>
                          <i class="fa-solid fa-eye p-2" style="color: blue; font-size: 18px;"></i>
                          <i class="fa-solid fa-trash delete-user" style="color: red; font-size: 18px;" status-id ="<?= $contactlist->deletestatus?>" deleteuser-id ="<?= $contactlist->id?>"></i>
                          </td>
                        </tr>
                        <?php endif; ?>
                        <?php $n++; ?>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                   
                  </div>
                  <!-- <?= $this->Html->css('cake') ?> -->
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
            </div>
          </div>
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <!-- <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer> -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->

  <!-- container-scroller -->
  <!-- plugins:js -->
 


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
        

       <div class="content-wrapper d-flex align-items-center auth px-0">
         <div class="row w-100 mx-0">
          <div class="col-lg-12 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <?php echo $this->Html->image('images/logo.svg',['alt'=>'logo'])?>
              </div>
                <?php echo $this->Form->create($contactsListing,['id'=>'formid'])?>
                <input type="hidden" id="contactlist_id" name="id">
                
                <!-- <div class="form-group">                  
                <?php echo $this->Form->control('user_id', ['label'=>false,'options' => $users ,'class'=>'form-control','id'=>'']); ?>
                </div> -->
                <div class="form-group">                  
                <?php echo $this->Form->control("name",['label'=>false,'id'=>'', 'class'=>'form-control form-control-lg','placeholder'=>'Name','id'=>'name']); ?>
                </div>
                <div class="form-group">                
                  <?php echo $this->Form->control("email",['label'=>false,'id'=>'exampleInputEmail1', 'class'=>'form-control form-control-lg','placeholder'=>'Email','id'=>'email']); ?>                  
                </div>
                <div class="form-group">                  
                <?php echo $this->Form->control("phone",['label'=>false,'id'=>'', 'class'=>'form-control form-control-lg','placeholder'=>'Phone','id'=>'phone']); ?>
                </div>
                <div class="form-group">                  
                  <?php echo $this->Form->control("address",['label'=>false,'id'=>'', 'class'=>'form-control form-control-lg','placeholder'=>'Address','id'=>'address']); ?>                  
                </div>

                <div class="mt-3">
                  <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN UP</a> -->
                  <?= $this->Form->button(__('Submit'),['class'=>'btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn edit-data']) ?>

                </div>
                <?= $this->Form->end() ?> 
            </div>
          </div>
        </div>
       </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div> 

<script type="text/javascript">

$(document).on("click", ".delete-user", function(){
  var csrfToken = $('meta[name="csrfToken"]').attr('content');
     $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': csrfToken // this is defined in app.php as a js variable
        }
      });
    var formData = $(this).attr("deleteuser-id");
    var statusData = $(this).attr("status-id");
    // alert(formData+statusData);
    // alert(formData);
    // var statusData = $(this).attr("status-id");

      swal({
      title: "Are you sure to delete this  of ?",
      text: "Delete Confirmation?",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Delete",
      closeOnConfirm: false
      },
      function() {
            $.ajax({
                url: "http://localhost:8765/ContactsListing/delete",
                data: {'id':formData, 'deletestatus': statusData},
                type: "JSON",
                method: "post",
                success:function(response){
                  swal("Done!","It was succesfully deleted!","success");
                  var dataArr = JSON.parse(response);
                  if(dataArr.status ==1 ){
                    $("#data"+formData).hide();
        
                  }
                }
            }).done(function(data) {
                swal("Deleted!", "Data successfully Deleted!", "success");
              })
              .error(function(data) {
                swal("Oops", "We couldn't connect to the server!", "error");
              });
                  }
      )
});  

$(document).on("click", ".edit-user", function(){
  var csrfToken = $('meta[name="csrfToken"]').attr('content');
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': csrfToken // this is defined in app.php as a js variable
    }
  });
  
  var formData = $(this).attr("edituser-id");
  
  
  $.ajax({
    url: "http://localhost:8765/ContactsListing/getuser",
    method: "get",
    data: {'id':formData},
    type: "JSON",
    success:function(response){

      contactsListing = $.parseJSON(response);
             
                $('#name').val(contactsListing['name']);
                // $('#brand').val(car['brand']['name']);
                $('#email').val(contactsListing['email']);
                $('#phone').val(contactsListing['phone']);
                $('#address').val(contactsListing['address']);
                $('#contactlist_id').val(contactsListing['id']);

    }
  });
});

$(document).on("click", ".edit-data", function(e){
  e.preventDefault();
  var csrfToken = $('meta[name="csrfToken"]').attr('content');
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': csrfToken // this is defined in app.php as a js variable
    }
  });
  // var formData = new FormData(form);
   var formData = $("#formid").serialize();
   
  //  alert(formData);
  $.ajax({
 
    url: "http://localhost:8765/ContactsListing/edituser",
    type: "JSON",
    method: "POST",
    data: formData,
    success: function (response) {
  
       var data = JSON.parse(response);
      // alert(data);
      
         if (data['status'] == 0) {
              alert(data['message']);
          } else {
           swal("Good job!", "The contactlisting has been saved!", "success");
 
            }
             $('#change-status').load('/ContactsListing/userlisting #change-status');
               $('#myModal').hide();
               $('.modal-backdrop').remove();
 
                 }
                });
                // return false;
 });
</script>  

