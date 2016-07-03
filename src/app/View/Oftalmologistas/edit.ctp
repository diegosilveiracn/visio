<h1 class="ls-title-intro ls-ico-pencil">Alteração de Oftalmologista</h1>

<?php echo $this->Form->create('Oftalmologista', array('action' => 'edit', 'class' => 'ls-form ls-form-horizontal row'));?>

<fieldset>
<?php
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('nome', array('div' => 'ls-label col-md-3'));
echo $this->Form->input('email', array('div' => 'ls-label col-md-3', 'label' => 'E-mail'));
echo $this->Form->input('crmv', array('div' => 'ls-label col-md-3', 'label' => 'CRMV'));
?>
</fieldset>

<?php echo $this->Form->end(array('div' => 'ls-actions-btn', 'label' => 'Atualizar', 'class' => 'ls-btn-primary')); ?>
