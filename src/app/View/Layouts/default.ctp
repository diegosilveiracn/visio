<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Bem-vindo ao Visio
		<?php /*echo $this->fetch('title');*/ ?>
	</title>
	<?php
		//echo $this->Html->meta('icon');

		echo $this->Html->css('visio');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>

<body>
	<div id="container">
		<div id="header">
			<div class="left">
				<?php
					if ($this->Session->check('Auth.User')) {
						echo $this->Html->image("menu.png", array(
    					"alt" => "Menu",
    					'url' => array('controller' => 'opcoes', 'action' => 'index')
));
					}else{
						echo 'Visio: Prontuário Oftalmológico Veterinário';
					}
				?>
			</div>

			<div class="right">
					<?php
						if ($this->Session->check('Auth.User')) {
								echo  'Bem-vindo(a), '.$this->Session->read('Auth.User.Oftalmologista.nome');
						}
					?>
					|
					<?php echo $this->Html->link('Sair', array('controller' => 'users', 'action' => 'logout')); ?>
			</div>
		</div>

		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
	</div>

	<?php
		//echo $this->element('sql_dump');
	?>
</body>
</html>
