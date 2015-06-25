<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Visio
		<?php /*echo $this->fetch('title');*/ ?>
	</title>
	<?php
		//echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
				<?php 
					echo $this->Html->link('Menu', array('controller' => 'opcoes', 'action' => 'index')); 
				?>
				
				<div>
					<?php 
						if ($this->Session->check('Auth.User')) {
							echo $this->Html->link('Sair', array('controller' => 'users', 'action' => 'logout')); 
						}
					?>
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
