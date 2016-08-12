<h1 class="ls-title-intro ls-ico-pencil">Alteração de Paciente</h1>

<?php echo $this->Form->create('Paciente', array('action' => 'edit', 'class' => 'ls-form ls-form-horizontal row')); ?>

<fieldset>
<?php
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('proprietario_id', array('type' => 'hidden'));
echo $this->Form->input('nome', array('div' => 'ls-label col-md-3'));?>

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
  <?php echo $this->Form->input('sexo', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('M' => 'Macho', 'F' => 'Fêmea'), 'empty' => '')); ?>
</label>

<label class="ls-label col-md-3">
  <b class="ls-label-text">Proprietário</b>
  <?php echo $this->Form->input('proprietario_id', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'disabled', 'options' => $proprietarios)); ?>
</label>

</fieldset>

<div class="ls-actions-btn">
    <?php echo $this->Form->submit('Atualizar', array('div' => false, 'class' => 'ls-btn')); ?>
    <?php echo $this->Html->link('Excluir', array('action' => 'delete', $this->request->data['Paciente']['id'], $this->request->data['Proprietario']['id']), array('confirm' => 'Tem certeza que deseja excluir?', 'class' => 'ls-btn-danger')); ?>
    <?php echo $this->Html->link('Voltar',	array ('controller' => 'pacientes', 'action' => 'index', $this->request->data['Proprietario']['id']), array('class' => 'ls-btn')); ?>
</div>

<?php echo $this->Form->end();?>
