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

<div class="">
  <?php echo $this->Form->submit('Atualizar', array('div' => false, 'class' => 'ls-btn')); ?>
  <?php echo $this->Html->link('Excluir', array ('action' => 'delete', $this->request->data['Oftalmologista']['id']), array('confirm' => 'Tem certeza que deseja excluir?', 'class' => 'ls-btn-danger')); ?>
  <?php echo $this->Html->link('Voltar', array ('controller' => 'oftalmologistas', 'action' => 'index'), array('class' => 'ls-btn')); ?>
</div>

<?php echo $this->Form->end();?>
