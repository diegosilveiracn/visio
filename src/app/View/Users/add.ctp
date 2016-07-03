<h1 class="ls-title-intro ls-ico-plus">Cadastro de Usuário</h1>

<?php echo $this->Form->create('User', array('action' => 'add', 'class' => 'ls-form ls-form-horizontal row')); ?>

<fieldset>

<label class="ls-label col-md-3">
  <b class="ls-label-text">Oftalmologista</b>
  <?php
  echo $this->Form->input('oftalmologista_id', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => $oftalmologistas, 'empty' => ''));
  ?>
</label>

<?php
echo $this->Form->input('username', array('div' => 'ls-label col-md-3', 'label' => 'Usuário'));
echo $this->Form->input('password', array('div' => 'ls-label col-md-3', 'label' => 'Senha'));
?>

<label class="ls-label col-md-3">
  <b class="ls-label-text">Regra de Acesso</b>

  <?php echo $this->Form->input('role', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false,
  'options' => array('1' => 'Administrador' , '2' => 'Simples'),
  'default' => '2'));
  ?>
</label>

</fieldset>

<?php echo $this->Form->end(array('div' => 'ls-actions-btn', 'label' => 'Salvar', 'class' => 'ls-btn-primary')); ?>
