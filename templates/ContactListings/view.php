<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactListings $contactListings
 */
?>
<div class="row">
    <!-- <aside class="column"> -->
        <!-- <div class="side-nav"> -->
            <!-- <h4 class="heading"><?= __('Actions') ?></h4> -->
            <!-- <?= $this->Html->link(__('Edit Contacts Listing'), ['action' => 'edit', $contactListings->id], ['class' => 'side-nav-item']) ?> -->
            <!-- <?= $this->Form->postLink(__('Delete Contacts Listing'), ['action' => 'delete', $contactListings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactListings->id), 'class' => 'side-nav-item']) ?> -->
            <!-- <?= $this->Html->link(__('List Contacts Listing'), ['action' => 'index'], ['class' => 'side-nav-item']) ?> -->
            <!-- <?= $this->Html->link(__('New Contacts Listing'), ['action' => 'add'], ['class' => 'side-nav-item']) ?> -->
        <!-- </div> -->
    <!-- </aside> -->
    <!-- <div class="column-responsive column-80">
        <div class="contactListings view content">
            <h3><?= h($contactListings->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $contactListings->has('user') ? $this->Html->link($contactListings->user->id, ['controller' => 'Users', 'action' => 'view', $contactListings->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($contactListings->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($contactListings->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($contactListings->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($contactListings->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($contactListings->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($contactListings->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($contactListings->created_at) ?></td>
                </tr>
            </table>
        </div>
    </div> -->
</div>






    <?php echo $this->element("sidebar"); ?>
      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row" style="justify-content: center;">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <!-- <h4 class="card-title">Basic Table</h4> -->
                  <!-- <h3><?= h($contactListings->name) ?> -->
                  <!-- <?= $this->Html->link(__('Add Policy'), [ $contactListings->id], ['class' => 'btn btn-primary float-right mb-4 data-bs-toggle="modal" data-bs-target="#exampleModal"']) ?> -->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add Policy
                  </button>
                  </h3>
                  <!-- <p class="card-description">
                    Add class <code>.table</code>
                  </p> -->
                  <div class="table-responsive">
                    <table class="table">
                        <!-- <tr>
                            <th><?= __('User') ?></th>
                            <td><?= $contactListings->has('user') ? $this->Html->link($contactListings->user->id, ['controller' => 'Users', 'action' => 'view', $contactListings->user->id]) : '' ?></td>
                        </tr> -->
                        <tr>
                            <th><?= __('Name') ?></th>
                            <td><?= h($contactListings->name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Email') ?></th>
                            <td><?= h($contactListings->email) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Phone') ?></th>
                            <td><?= h($contactListings->phone) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Address') ?></th>
                            <td><?= h($contactListings->address) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Status') ?></th>
                            <td><?= h($contactListings->status) ?></td>
                        </tr>
                        <!-- <tr>
                            <th><?= __('Id') ?></th>
                            <td><?= $this->Number->format($contactListings->id) ?></td>
                        </tr> -->
                        <tr>
                            <th><?= __('Created At') ?></th>
                            <td><?= h($contactListings->created_at) ?></td>

                        </tr>
                    

                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        
     





        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="content-wrapper d-flex align-items-center auth px-0">
         <div class="row w-100 mx-0">
          <div class="col-lg-12 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <?php echo $this->Html->image('images/logo.svg',['alt'=>'logo'])?>
              </div>
                <?php echo $this->Form->create($companyAsset,['id'=>'formid'])?>
                <input type="hidden" id="contactlist_id" name="id">
                
                <div class="form-group">                  
                <!-- <?php echo $this->Form->control("user_id",['label'=>false,'id'=>'user_id', 'class'=>'form-control form-control-lg','placeholder'=>'Email', 'value'=> '']); ?>  -->
                <input type="hidden" name="user_id" value="<?php echo $result->id ?>">
                <input type="hidden" name="contact_listing_id" value="<?php echo $contactListings->id ?>">
                </div>

                <div class="form-group">     
                <?php echo $this->Form->control("insurance_company_id",['label'=>false,'id'=>'', 'class'=>'form-control form-control-lg','id'=>'insurancecomapny','required'=>false]); ?>
                </div>
                <div class="form-group">    
                <?php echo $this->Form->control("insurance_policy_id",['label'=>false,'id'=>'', 'options' => $insurancePolicies,'class'=>'form-control form-control-lg','id'=>'insurancecomapny','required'=>false]); ?>
              </div>
                <div class="form-group">     
                <?php echo $this->Form->control("premium",['label'=>false,'id'=>'', 'options' => $insurancePremium,'class'=>'form-control form-control-lg','id'=>'insurancecomapny','required'=>false]); ?>
                </div>
                <?php
                echo $this->Form->control('term_length');
                    echo $this->Form->control('status');
                    echo $this->Form->control('deleted');
?>
                <?php echo $this->Form->control('policy_status',['value'=>'0']); ?>

                <div class="mt-3">
                  <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN UP</a> -->
                  <?= $this->Form->button(__('Submit'),['class'=>'btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn edit-data']) ?>

                </div>
                <?= $this->Form->end() ?> 
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
