
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
              <!-- <form class="pt-3"> -->
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <?php echo $this->Form->create($user)?>
                <div class="form-group">                  
                  <?php echo $this->Form->control("first_name",['label'=>false,'id'=>'firstName', 'class'=>'form-control form-control-lg','placeholder'=>'Username','required'=>false]); ?>
                  <span id="uname"></span>
                </div>
                <div class="form-group">                  
                  <?php echo $this->Form->control("last_name",['label'=>false,'id'=>'lastName', 'class'=>'form-control form-control-lg','placeholder'=>'Lastname','required'=>false]); ?>                  
                  <span id="luname"></span>
                </div>
                <div class="form-group">                
                  <?php echo $this->Form->control("email",['label'=>false,'id'=>'email', 'class'=>'form-control form-control-lg','placeholder'=>'Email','required'=>false]); ?>                  
                  <span id="uemail"></span>
                </div>
                <div class="form-group">                  
                  <?php echo $this->Form->control("contact_number",['label'=>false,'id'=>'contact', 'class'=>'form-control form-control-lg','placeholder'=>'Phone','required'=>false]); ?>
                  <span id="uphone"></span>
                </div>
                <div class="form-group">                  
                  <?php echo $this->Form->control("address",['label'=>false,'id'=>'address', 'class'=>'form-control form-control-lg','placeholder'=>'Address','required'=>false]); ?>                  
                  <span id="uaddress"></span>
                </div>
                <div class="form-group">                
                  <?php echo $this->Form->control("password",['label'=>false,'id'=>'password', 'class'=>'form-control form-control-lg','placeholder'=>'Password','required'=>false]); ?>                  
                  <span id="upass"></span>
                </div>
                <div class="form-group">                
                  <?php echo $this->Form->control("confirmpassword",['type'=>'password','label'=>false,'id'=>'cpassword', 'class'=>'form-control form-control-lg','placeholder'=>'Confirm Password','required'=>false]); ?>                  
                  <span id="conupass"></span>
                </div>
                
                <div class="mt-3">
                  <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN UP</a> -->
                  <?php echo $this->Form->button(__('Sign Up'),['class'=>'btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn signuptest',
                  'id'=>'submit'])?>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login" class="text-primary">Login</a>
                </div>
                <?php echo $this->Flash->render() ?>
                <?= $this->Form->end() ?> 
                <!-- <form> -->
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>