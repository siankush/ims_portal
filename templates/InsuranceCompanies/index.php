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
                    <th>NAME</th>
                    <th>STATUS</th>

                    <th class="actions">ACTIONS</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($insuranceCompanies as $insuranceCompany): ?>
                <tr id="#tabledata_user">
                    <td><?= $this->Number->format($insuranceCompany->id) ?></td>
                    <td><?= h($insuranceCompany->name) ?></td>
                    <td>
                    <?php  if($insuranceCompany->status == 1) : ?>
                            
                            <?= $this->Form->postLink(__('Online'),['action' => 'userstatus', $insuranceCompany->id, $insuranceCompany->status],['class'=>'badge badge-sm bg-gradient-success'], ['confirm' => __('Are you sure you want to Inactive ?', $insuranceCompany->id)]) ?>
                            <?php else : ?>
                                
                                <?= $this->Form->postLink(__('Offline'), ['action' => 'userstatus', $insuranceCompany->id, $insuranceCompany->status],['class'=>'badge badge-sm bg-gradient-secondary'], ['confirm' => __('Are you sure you want to Active ?', $insuranceCompany->id)]) ?>
                                <?php endif; ?> 
                    </td>
                    <td class="actions">
                        <!-- <?= $this->Html->link(__(''), ['action' => 'view', $insuranceCompany->id],['class'=>'fa-solid fa-eye']) ?> -->
                        <?= $this->Html->link(__(''), ['action' => 'edit', $insuranceCompany->id],['class'=>'fa-solid fa-pen-to-square']) ?>
                        <?= $this->Form->postLink(__(''), ['action' => 'delete', $insuranceCompany->id], ['confirm' => __('Are you sure you want to delete # {0}?', $insuranceCompany->id),'class'=>'fa-solid fa-trash-can delete-user']) ?>
                        <!-- <i class="fa-solid fa-trash delete-user" style="color: red; font-size: 18px;" <?= $insuranceCompany->id?>></i>                           -->

                    </td>

                </tr>
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



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>



<script>
    //  var csrfToken = $('meta[name="csrfToken"]').attr('content');
    //    $.ajaxSetup({
    //       headers: {
    //         'X-CSRF-TOKEN': csrfToken // this is defined in app.php as a js variable
    //       }
    //     });
    $(document).on("click", ".delete-user", function(){
   
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
                  url: "http://localhost:8765/insurance-companies/delete",
                  data: {'id':formData, 'deleted': statusData},
                  type: "JSON",
                  method: "post",
                  success:function(response){
                    swal("Done!","It was succesfully deleted!","success");
                    var dataArr = JSON.parse(response);
                    if(dataArr.status ==1 ){
                      $("#tabledata_user"+formData).hide();
          
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
  
 
</script>