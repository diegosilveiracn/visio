<h1 class="ls-title-intro ls-ico-info">Visualização de Usuário</h1>

<table class="ls-table ls-no-hover ls-table-striped">
<tr>
  <th>Nome</th>
  <td><?php echo $user['Oftalmologista']['nome'] != null ? $user['Oftalmologista']['nome']: "Não informado" ?></td>
</tr>

<tr>
  <th>Login</th>
  <td><?php echo $user['User']['username']? $user['User']['username']: "Não informado"; ?></td>
</tr>

<tr>
  <th>Senha</th>
  <td><?php echo $user['User']['password']? $user['User']['password'] : "Não informado";?></td>
</tr>

<tr>
  <th>Regra de Acesso</th>
  <td><?php echo $user['User']['role'] == 1 ? 'Administrador' : 'Simples';?></td>
</tr>
</table>

<div class="ls-actions-btn">
  <?php echo $this->Html->link('Editar', array ('controller' => 'users', 'action' => 'edit', $user['User']['id']), array('class' => 'ls-btn')); ?>
  <?php echo $this->Html->link('Excluir', array ('controller' => 'users', 'action' => 'delete', $user['User']['id']), array('confirm' => 'Tem certeza que deseja excluir?', 'class' => 'ls-btn-danger')); ?>
  <?php echo $this->Html->link('Voltar', array ('controller' => 'users', 'action' => 'index'), array('class' => 'ls-btn')); ?>
</div>
