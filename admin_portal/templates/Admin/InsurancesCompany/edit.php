<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InsurancesCompany $insurancesCompany
 */
?>

<?php echo $this->element('sidebar') ?>
<style>
    .insurancesCompany.form.content {
    background: #214162;
    color: black;
    padding: 40px;
    border: 11px solid #ff5722;
}
label{
    color:white;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.submit {
  width: 100%;
  background-color: #ff5722;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.submit:hover {
  background-color: #000;
}
/* 
div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
} */
</style>
<div class="row">

    <div class="column-responsive column-80">
        <div class="insurancesCompany form content">
            <?= $this->Form->create($insurancesCompany) ?>
            <fieldset>
                <legend style="color:white;"><?= __('Edit Insurances Company') ?></legend>
                <?php
                    echo $this->Form->control('insurance_company_name',['class'=>'formdesign']);
                    // echo $this->Form->control('status',['class'=>'formdesign']);
                    // echo $this->Form->control('deleted',['class'=>'formdesign']);
                    // echo $this->Form->control('created_at',['class'=>'formdesign']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'),['class'=>'submit']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>



