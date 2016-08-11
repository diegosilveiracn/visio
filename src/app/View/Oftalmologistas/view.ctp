<h1 class="ls-title-intro ls-ico-info">Visualização de Oftalmologista</h1>

<table class="ls-table ls-no-hover ls-table-striped">
<tr>
  <th>Nome</th>
  <td><?php echo $oftalmologista['Oftalmologista']['nome'] != null? $oftalmologista['Oftalmologista']['nome'] : "Não informado"; ?></td>
</tr>

<tr>
  <th>E-mail</th>
  <td><?php echo $oftalmologista['Oftalmologista']['email'] != null? $oftalmologista['Oftalmologista']['email'] : "Não informado" ; ?></td>
</tr>

<tr>
  <th>CRMV</th>
  <td><?php echo $oftalmologista['Oftalmologista']['crmv'] != null ? $oftalmologista['Oftalmologista']['crmv']: "Não informado" ; ?> </td>
</tr>
</table>

<div class="">
  <?php echo $this->Html->link('Editar', array ('controller' => 'oftalmologistas', 'action' => 'edit', $oftalmologista['Oftalmologista']['id']), array('class' => 'ls-btn')); ?>
  <?php echo $this->Html->link('Excluir', array ('controller' => 'oftalmologistas', 'action' => 'delete', $oftalmologista['Oftalmologista']['id']), array('confirm' => 'Tem certeza que deseja excluir?', 'class' => 'ls-btn-danger')); ?>
  <?php echo $this->Html->link('Voltar', array ('controller' => 'oftalmologistas', 'action' => 'index'), array('class' => 'ls-btn')); ?>
</div>
