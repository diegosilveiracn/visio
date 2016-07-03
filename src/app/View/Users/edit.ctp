<h1 class="ls-title-intro ls-ico-pencil">Alteração de Usuário</h1>

<?php echo $this->Form->create('User', array('action' => 'edit', 'class' => 'ls-form ls-form-horizontal row')); ?>

<fieldset>
<?php
echo $this->Form->input('id', array('type' => 'hidden'));
?>

<label class="ls-label col-md-3">
  <b class="ls-label-text">Oftalmologista</b>
  <?php
  echo $this->Form->input('oftalmologista_id', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'disabled' , 'options' => $oftalmologistas, 'empty' => ''));
  ?>
</label>

<label class="ls-label col-md-3">
  <b class="ls-label-text">Regra</b>
  <?php
  echo $this->Form->input('role', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('1' => 'Administrador', '2' => 'Simples')));
  ?>
</label>

</fieldset>

<?php echo $this->Form->end(array('div' => 'ls-actions-btn', 'label' => 'Atualizar', 'class' => 'ls-btn-primary')); ?>
