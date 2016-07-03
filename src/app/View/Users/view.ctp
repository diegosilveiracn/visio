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
