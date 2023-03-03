<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\InsurancesCompany> $insurancesCompany
 */
?>
<?php echo $this->element('sidebar1') ?>

<div class="insurancesCompany index content" style="margin-top: 120px;">

<div class="container">
<h1 style="padding-bottom:70px; text-align:center;font-weight:800;font-size:35px;">INSURANCE COMPANIES</h1>
        <table class="table table-hover" >

            <thead>
            <tr id="#tablerow">
                <th>S.No</th>
                <th>Insurance Company</th>
                <th>status</th>
                <th>Create Date</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($insurancesCompany as $insurancesCompany): ?>
                <?php if($insurancesCompany->deleted==1): ?>
    
            <tr id="data<?php echo $insurancesCompany->id;?>" class="tabledata_user">
                <td><?= $this->Number->format($insurancesCompany->id) ?></td>
                <td><?= h($insurancesCompany->insurance_company_name) ?></td>
                <td>
                        <?php if($insurancesCompany->status == 1): ?>
                            <?= $this->Form->postLink(__('Active'), ['action' => 'insuranceStatus', $insurancesCompany->id,$insurancesCompany->status], ['class'=>'alert alert-success','id'=>'','confirm' => __('Are you sure you want to inactive ?', $insurancesCompany->id)]) ?>

                            <?php else: ?>    
                            <?= $this->Form->postLink(__('Inactive'), ['action' => 'insuranceStatus', $insurancesCompany->id,$insurancesCompany->status], ['class'=>'alert alert-danger' ,'confirm' => __('Are you sure you want to active ?', $insurancesCompany->id)]) ?>
                        <?php endif; ?>    
                    </td>
                <td><?= h($insurancesCompany->created_at) ?></td>
                <td class="actions">
                        <?= $this->Html->link(__(''), ['action' => 'view', $insurancesCompany->id],['class'=>'fa-solid fa-eye']) ?>
                        <?= $this->Html->link(__(''), ['action' => 'edit', $insurancesCompany->id],['class'=>'fa-solid fa-pen-to-square']) ?>
                        <!-- <?= $this->Form->postLink(__(''), ['action' => 'delete', $insurancesCompany->id],['confirm' => __('Are you sure you want to delete # {0}?', $insurancesCompany->id),'class'=>'fa-solid fa-trash-can']) ?> -->
                        <i class="fa-solid fa-trash-can delete-insurance-company" style="color: red; font-size: 18px; cursor: pointer;" status-id ="<?= $insurancesCompany->deleted?>" deleteinsurance-id ="<?= $insurancesCompany->id?>"></i>                          

                    </td>
            </tr>
            <?php endif;  ?>
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
<?= $this->Html->script('adminscript') ?>
