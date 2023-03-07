

<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\InsurancesCompany> $insurancesCompany
 */
?>
<?php echo $this->element('sidebar1') ?>
<style>
    td {
    color: white;
}
a {
    color: white;
}
</style>
<div class="insurancesCompany index content" style="margin-top: 120px;">

<div class="container-fluid">
<h1 style="padding-bottom:70px; text-align:center;font-weight:800;font-size:35px;">POLICIES LISTINGS</h1>
        <table class="table table-hover" >

            <thead>
            <tr id="#tablerow_user">
            <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('insurance_company_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('premium') ?></th>
                    <th>Status</th>
                    <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($insurancePolicies as $insurancePolicy): ?>
                <tr id="#tabledata_user">
                <td><?= $this->Number->format($insurancePolicy->id) ?></td>
                    <td><?= $insurancePolicy->has('insurance_company') ? $this->Html->link($insurancePolicy->insurance_company->name, ['controller' => 'InsuranceCompanies', 'action' => 'view', $insurancePolicy->insurance_company->insurance_company_name]) : '' ?></td>                    
                    <td><?= h($insurancePolicy->name) ?></td>
                    <td><?= h($insurancePolicy->premium) ?></td>
                    <td>
                    <?php  if($insurancePolicy->status == 1) : ?>
                            
                            <?= $this->Form->postLink(__('Online'),['action' => 'userstatus', $insurancePolicy->id, $insurancePolicy->status],['class'=>'badge badge-sm bg-gradient-success'], ['confirm' => __('Are you sure you want to Inactive ?', $insurancePolicy->id)]) ?>
                            <?php else : ?>
                                
                                <?= $this->Form->postLink(__('Offline'), ['action' => 'userstatus', $insurancePolicy->id, $insurancePolicy->status],['class'=>'badge badge-sm bg-gradient-secondary'], ['confirm' => __('Are you sure you want to Active ?', $insurancePolicy->id)]) ?>
                                <?php endif; ?> 
                    </td>
                    <td class="actions">
                        <?= $this->Html->link(__(''), ['action' => 'view', $insurancePolicy->id],['class'=>'fa-solid fa-eye']) ?>
                        <?= $this->Html->link(__(''), ['action' => 'edit', $insurancePolicy->id],['class'=>'fa-solid fa-pen-to-square']) ?>
                        <?= $this->Form->postLink(__(''), ['action' => 'delete', $insurancePolicy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $insurancePolicy->id),'class'=>'fa-solid fa-trash-can delete-user']) ?>
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
