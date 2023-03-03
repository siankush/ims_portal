<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InsurancesCompany $insurancesCompany
 */
?>
<?php echo $this->element('sidebar1') ?>

<div class="row">
   
    <div class="column-responsive column-80">
        <div class="insurancesCompany view content">
        <h1 style="padding-bottom:70px; text-align:center;font-weight:800;font-size:35px;color:white">INSURANCE COMPANIES VIEW</h1>

            <h3 style="color: white;"><?= h($insurancesCompany->id) ?></h3>
            <table class="table">
                <tr>
                    <th><?= __('Insurance Company Name') ?></th>
                    <td><?= h($insurancesCompany->insurance_company_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($insurancesCompany->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= h($insurancesCompany->deleted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($insurancesCompany->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($insurancesCompany->created_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
