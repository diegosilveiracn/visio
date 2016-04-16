<!DOCTYPE html>

<html class="ls-theme-green">
<head>
	<title>Bem-vindo ao Visio</title>

	<meta charset="utf-8">
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="Insira aqui a descrição da página.">
	<link href="http://assets.locaweb.com.br/locastyle/3.8.3/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
	<link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-boilerplate.png">
	<link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-boilerplate.png">
</head>

<body>
	<div class="ls-topbar ">

		<div class="ls-notification-topbar">

			<div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
				<a href="#" class="ls-ico-user">
					<span class="ls-name "><?php echo $this->Session->read('Auth.User.Oftalmologista.nome'); ?></span>
				</a>

				<nav class="ls-dropdown-nav ls-user-menu">
					<ul>
						<li><?php echo $this->Html->link('Alterar Senha', array('controller' => 'users', 'action' => 'password')); ?></li>
						<li><?php echo $this->Html->link('Sair', array('controller' => 'users', 'action' => 'logout')); ?></li>
					</ul>
				</nav>
			</div>
		</div>

		<span class="ls-show-sidebar ls-ico-menu"></span>

		<a href="<?php echo $this->Html->url(array("controller" => "pages", "action" => "display", "bar"));?>"  class="ls-go-next"><span class="ls-text">Tela inicial</span></a>

		<h1 class="ls-brand-name">
			<a href="#" class="ls-ico-eye">
				<small>Oftalmologia Veterinária</small>
				Visio
			</a>
		</h1>
	</div>

	<aside class="ls-sidebar">
		<div class="ls-sidebar-inner">
			<a href="<?php echo $this->Html->url(array("controller" => "pages", "action" => "display", "bar"));?>"  class="ls-go-prev"><span class="ls-text">Tela inicial</span></a>

			<nav class="ls-menu">
				<ul>
					<li>
						<a href="#" class="ls-ico-table-alt" title="Menu">Menu</a>
						<ul>
							<li><?php echo $this->Html->link('Clínica Veterinária', array('controller' => 'clinicas', 'action' => 'index'));?></li>
							<li><?php echo $this->Html->link('Consulta Médica', array('controller' => 'consultas', 'action' => 'index'));?></li>
							<li><?php echo $this->Html->link('Oftalmologista', array('controller' => 'oftalmologistas', 'action' => 'index'));?></li>
							<li><?php echo $this->Html->link('Proprietário', array('controller' => 'proprietarios', 'action' => 'index'));?></li>
							<li><?php echo $this->Html->link('Paciente', array('controller' => 'pacientes', 'action' => 'index'));?></li>
						</ul>
					</li>

					<?php if($this->Session->read('Auth.User.role') == 1){ ?>
						<li>
							<a href="#" class="ls-ico-cog" title="Configurações">Configurações</a>
							<ul>
								<li><?php echo $this->Html->link('Usuário do Sistema', array('controller' => 'users', 'action' => 'index')); ?></li>
							</ul>
						</li>
						<?php }?>
					</ul>
				</nav>
			</div>
		</aside>

		<main class="ls-main ">
			<div class="container-fluid">

				<?php echo $this->fetch('content'); ?>

			</div>
		</main>

		<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="http://assets.locaweb.com.br/locastyle/3.8.3/javascripts/locastyle.js" type="text/javascript"></script>
	</body>
	</html>
