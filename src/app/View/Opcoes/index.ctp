<h3>Opções do Sistema</h3>

<p><?php echo $this->Html->link('Clínica', array('controller' => 'clinicas', 'action' => 'index'));?></p>

<p><?php echo $this->Html->link('Consulta', array('controller' => 'consultas', 'action' => 'index'));?></p>

<p><?php echo $this->Html->link('Oftalmologista', array('controller' => 'oftalmologistas', 'action' => 'index'));?></p>

<p><?php echo $this->Html->link('Proprietário', array('controller' => 'proprietarios', 'action' => 'index'));?></p>

<p><?php echo $this->Html->link('Paciente', array('controller' => 'pacientes', 'action' => 'index'));?></p>

<p>
	<?php
		  if($this->Session->read('Auth.User.role') == 1){
			  echo $this->Html->link('Usuário', array('controller' => 'users', 'action' => 'index'));
		  }
	?>
</p>

<p><?php echo $this->Html->link('Configuração', array('controller' => 'users', 'action' => 'password'));?></p>
