<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create() ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div> -->


<style>
.logindesign{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.full_container {
    width: 100%;
    max-width: 100%;
    padding: 0;
    margin: 0;
    background: #214162 !important;
    position: absolute !important;
    z-index: -1 !important;
    /* margin-top: -140px !important; */

}
.main_bt {
    min-width: 125px;
    height: auto;
    float: left;
    background: #000000 !important;
    text-align: center;
    color: #fff;
    padding: 10px 25px;
    font-size: 16px;
    border-radius: 5px;
    border: none;
    transition: ease all 0.5s;
    cursor: pointer;
    font-weight: 300;
}
.message.error {
    background: #fcebea;
    color: #cc1f1a;
    border-color: #ef5753;
    text-align: center !important;
    margin-top: 60px !important;
    width: 400px;
    margin: 0 auto;
}
</style>

<div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <?php echo $this->Html->image('logo/logo.png',['width'=>'210']) ?>
                     </div>
                  </div>
                  <div class="login_form">
                  <?= $this->Form->create() ?>
                        <fieldset>
                              <?php echo $this->Form->control('email',['class'=>'logindesign']);?>
                              <?php echo $this->Form->control('password',['class'=>'logindesign']);?>
                       
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt">Sing In</button>
                           </div>
                        </fieldset>
                        <?= $this->Form->end() ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
