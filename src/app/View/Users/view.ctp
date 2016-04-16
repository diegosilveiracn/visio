<h1 class="ls-title-intro ls-ico-info">Visualização de Usuário</h1>

<h2>Nome</h2>
<p><?php echo $user['Oftalmologista']['nome'] != null ? $user['Oftalmologista']['nome']: "Não informado" ?></p>

<h2>Login</h2>
<p><?php echo $user['User']['username']? $user['User']['username']: "Não informado"; ?></p>

<h2>Senha</h2>
<p><?php echo $user['User']['password']? $user['User']['password'] : "Não informado";?></p>

<h2>Regra de Acesso</h2>
<p><?php echo $user['User']['role'] == 1 ? 'Administrador' : 'Simples';?></p>
