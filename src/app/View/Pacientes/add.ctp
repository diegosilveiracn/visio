  <h1 class="ls-title-intro ls-ico-plus">Cadastro de Paciente</h1>

  <?php echo $this->Form->create('Paciente', array('action' => 'add', 'class' => 'ls-form ls-form-horizontal row')); ?>

  <fieldset>
  <?php
  echo $this->Form->input('id', array('type' => 'hidden'));

  echo $this->Form->input('nome', array('div' => 'ls-label col-md-3')); ?>

  <label class="ls-label col-md-3">
    <b class="ls-label-text">Data de Nascimento</b>
    <?php echo $this->Form->input('data_nas', array('class' => 'date datepicker', 'div' => false, 'label' => false)); ?>
  </label>

  <?php
  echo $this->Form->input('especie', array('div' => 'ls-label col-md-3', 'label' => 'Espécie'));
  echo $this->Form->input('raca', array('div' => 'ls-label col-md-3', 'label' => 'Raça'));
  ?>

  <label class="ls-label col-md-3">
    <b class="ls-label-text">Sexo</b>
    <?php echo $this->Form->input('sexo', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('M' => 'Macho', 'F' => 'Fêmea'),'empty' => '')); ?>
  </label>

  <label class="ls-label col-md-3">
    <b class="ls-label-text">Proprietário</b>
    <?php echo $this->Form->input('proprietario_id', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => $proprietarios, 'empty' => '')); ?>
  </label>
</fieldset>

<div class="ls-actions-btn">
  <?php echo $this->Form->submit('Salvar', array('div' => false, 'class' => 'ls-btn')); ?>
  <?php echo $this->Html->link('Voltar',	array ('controller' => 'pacientes', 'action' => 'index', $proprietario_id), array('class' => 'ls-btn')); ?>
</div>

<?php echo $this->Form->end();?>
