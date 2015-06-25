<h3>Visualização de Usuário</h3>

<h1>Nome</h1>
<p><?php echo $user['Oftalmologista']['nome'];?></p>

<h1>Login</h1>
<p><?php echo $user['User']['username']; ?></p>

<h1>Senha</h1>
<p><?php echo $user['User']['password'];?></p>

<h1>Regra de Acesso</h1>
<p><?php echo $user['User']['role'] == 1 ? 'Administrador' : 'Simples';?></p>
