<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactsListing $contactsListing
 */
?>
<div class="row">
    <!-- <aside class="column"> -->
        <!-- <div class="side-nav"> -->
            <!-- <h4 class="heading"><?= __('Actions') ?></h4> -->
            <!-- <?= $this->Html->link(__('Edit Contacts Listing'), ['action' => 'edit', $contactsListing->id], ['class' => 'side-nav-item']) ?> -->
            <!-- <?= $this->Form->postLink(__('Delete Contacts Listing'), ['action' => 'delete', $contactsListing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactsListing->id), 'class' => 'side-nav-item']) ?> -->
            <!-- <?= $this->Html->link(__('List Contacts Listing'), ['action' => 'index'], ['class' => 'side-nav-item']) ?> -->
            <!-- <?= $this->Html->link(__('New Contacts Listing'), ['action' => 'add'], ['class' => 'side-nav-item']) ?> -->
        <!-- </div> -->
    <!-- </aside> -->
    <!-- <div class="column-responsive column-80">
        <div class="contactsListing view content">
            <h3><?= h($contactsListing->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $contactsListing->has('user') ? $this->Html->link($contactsListing->user->id, ['controller' => 'Users', 'action' => 'view', $contactsListing->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($contactsListing->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($contactsListing->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($contactsListing->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($contactsListing->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($contactsListing->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($contactsListing->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($contactsListing->created_at) ?></td>
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
                  <!-- <h3><?= h($contactsListing->name) ?> -->
                  <!-- <?= $this->Html->link(__('Add Policy'), [ $contactsListing->id], ['class' => 'btn btn-primary float-right mb-4 data-bs-toggle="modal" data-bs-target="#exampleModal"']) ?> -->
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
                            <td><?= $contactsListing->has('user') ? $this->Html->link($contactsListing->user->id, ['controller' => 'Users', 'action' => 'view', $contactsListing->user->id]) : '' ?></td>
                        </tr> -->
                        <tr>
                            <th><?= __('Name') ?></th>
                            <td><?= h($contactsListing->name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Email') ?></th>
                            <td><?= h($contactsListing->email) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Phone') ?></th>
                            <td><?= h($contactsListing->phone) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Address') ?></th>
                            <td><?= h($contactsListing->address) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Status') ?></th>
                            <td><?= h($contactsListing->status) ?></td>
                        </tr>
                        <!-- <tr>
                            <th><?= __('Id') ?></th>
                            <td><?= $this->Number->format($contactsListing->id) ?></td>
                        </tr> -->
                        <tr>
                            <th><?= __('Created At') ?></th>
                            <td><?= h($contactsListing->created_at) ?></td>
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
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
