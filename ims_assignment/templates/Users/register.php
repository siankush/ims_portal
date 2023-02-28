<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?= $baseurl ?>img/images/logo.svg" alt="logo">
              </div>
              <h4>New here?</h4>
              <form class="pt-3">
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <?php echo $this->Form->create($user)?>
                <div class="form-group">                  
                <?php echo $this->Form->control("first_name",['label'=>false,'id'=>'', 'class'=>'form-control form-control-lg','placeholder'=>'Username']); ?>
                </div>
                <div class="form-group">                  
                  <?php echo $this->Form->control("last_name",['label'=>false,'id'=>'', 'class'=>'form-control form-control-lg','placeholder'=>'Lastname']); ?>                  
                </div>
                <div class="form-group">                
                  <?php echo $this->Form->control("email",['label'=>false,'id'=>'exampleInputEmail1', 'class'=>'form-control form-control-lg','placeholder'=>'Email']); ?>                  
                </div>
                <div class="form-group">                  
                <?php echo $this->Form->control("contact_number",['label'=>false,'id'=>'', 'class'=>'form-control form-control-lg','placeholder'=>'Phone']); ?>
                </div>
                <div class="form-group">                  
                  <?php echo $this->Form->control("address",['label'=>false,'id'=>'', 'class'=>'form-control form-control-lg','placeholder'=>'Address']); ?>                  
                </div>
                <div class="form-group">                
                  <?php echo $this->Form->control("password",['label'=>false,'id'=>'exampleInputEmail1', 'class'=>'form-control form-control-lg','placeholder'=>'Password']); ?>                  
                </div>
                <div class="form-group">                
                  <?php echo $this->Form->control("confirmpassword",['label'=>false,'id'=>'exampleInputEmail1', 'class'=>'form-control form-control-lg','placeholder'=>'Confirm Password']); ?>                  
                </div>

                <div class="mt-3">
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN UP</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login" class="text-primary">Login</a>
                </div>
                <?= $this->Form->end() ?> 
                <form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>