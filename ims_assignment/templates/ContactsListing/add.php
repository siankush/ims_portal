<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactsListing $contactsListing
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<?= $this->Html->css('cake') ?>
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php echo $this->element('sidebar'); ?>
    
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

         <div class="col-12">
        <div class="content-wrapper d-flex align-items-center auth px-0">
         <div class="row w-100 mx-0">
          <div class="col-lg-6 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <?php echo $this->Html->image('images/logo.svg',['alt'=>'logo'])?>
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <?php echo $this->Form->create($contactsListing)?>
        
                <div class="form-group">                  
                <?php echo $this->Form->control('user_id', ['label'=>false,'options' => $users ,'class'=>'form-control']); ?>
                </div>
                <div class="form-group">                  
                <?php echo $this->Form->control("name",['label'=>false,'id'=>'', 'class'=>'form-control form-control-lg','placeholder'=>'Name','required'=>false]); ?>
                </div>
                <div class="form-group">                
                  <?php echo $this->Form->control("email",['label'=>false,'id'=>'exampleInputEmail1', 'class'=>'form-control form-control-lg','placeholder'=>'Email','required'=>false]); ?>                  
                </div>
                <div class="form-group">                  
                <?php echo $this->Form->control("phone",['label'=>false,'id'=>'', 'class'=>'form-control form-control-lg','placeholder'=>'Phone','required'=>false]); ?>
                </div>
                <div class="form-group">                  
                  <?php echo $this->Form->control("address",['label'=>false,'id'=>'', 'class'=>'form-control form-control-lg','placeholder'=>'Address','required'=>false]); ?>                  
                </div>

                <div class="mt-3">
                  <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN UP</a> -->
                  <?= $this->Form->button(__('Submit'),['class'=>'btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn']) ?>

                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login" class="text-primary">Login</a>
                </div>
                <?= $this->Form->end() ?> 
              </div>
           </div>
          </div>
        </div>
      <!-- content-wrapper ends -->
    <!-- page-body-wrapper ends -->
         </div>     
        </div>
      </div>
    </div>
  </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->


