<h1 class="ls-title-intro ls-ico-pencil">Alteração de Senha</h1>

<?php echo $this->Form->create('User', array('action' => 'password', 'class' => 'ls-form ls-form-horizontal row')); ?>

<fieldset>
<?php
echo $this->Form->input('new_password', array('type' => 'password', 'div' => 'ls-label col-md-3', 'label' => 'Nova Senha'));
echo $this->Form->input('confirm_password', array('type' => 'password', 'div' => 'ls-label col-md-3', 'label' => 'Confirmar Senha'));
?>
</fieldset>

<?php echo $this->Form->end(array('div' => 'ls-actions-btn', 'label' => 'Atualizar', 'class' => 'ls-btn-primary')); ?>
