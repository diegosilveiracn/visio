<h1 class="ls-title-intro ls-ico-pencil">Alteração de Paciente</h1>

<?php echo $this->Form->create('Paciente', array('action' => 'edit', 'class' => 'ls-form ls-form-horizontal row')); ?>

<fieldset>
<?php
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('proprietario_id', array('type' => 'hidden'));

echo $this->Form->input('nome', array('div' => 'ls-label col-md-3'));
echo $this->Form->input('data_nascimento', array('div' => 'ls-label col-md-3', 'label' => 'Data de Nascimento', 'dateFormat' => 'DMY'));
echo $this->Form->input('especie', array('div' => 'ls-label col-md-3', 'label' => 'Espécie'));
echo $this->Form->input('raca', array('div' => 'ls-label col-md-3', 'label' => 'Raça'));
?>

<label class="ls-label col-md-3">
  <b class="ls-label-text">Sexo</b>
  <?php echo $this->Form->input('sexo', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('M' => 'Macho', 'F' => 'Fêmea'), 'empty' => '')); ?>
</label>

<label class="ls-label col-md-3">
  <b class="ls-label-text">Proprietário</b>
  <?php echo $this->Form->input('proprietario_id', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'disabled', 'options' => $proprietarios)); ?>
</label>

</fieldset>

<?php echo $this->Form->end(array('div' => 'ls-actions-btn', 'label' => 'Atualizar', 'class' => 'ls-btn-primary')); ?>
