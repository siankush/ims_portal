<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?= $baseurl ?>img/images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>              
              <?php echo $this->Form->create()?>
                <div class="form-group">
                <?php echo $this->Form->control("email",['label'=>false,'id'=>'email', 'class'=>'form-control form-control-lg','placeholder'=>'Email']); ?>
                  <span id="uemail"></span>
                </div>
                <div class="form-group">
                <?php echo $this->Form->control("password",['label'=>false,'id'=>'password', 'class'=>'form-control form-control-lg','placeholder'=>'Password']); ?>
                  <span id="upass"></span>
                </div>
                <div class="mt-3">                  
                  <?php echo $this->Form->button(__('Sign In'),['class'=>'btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn',
                  'id'=>'login'])?>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register" class="text-primary">Create</a>
                </div>
                <?= $this->Form->end() ?> 
              
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>