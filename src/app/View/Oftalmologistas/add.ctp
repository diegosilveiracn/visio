<h3>Cadastro de Oftalmologista</h3>

<?php

echo $this->Form->create('Oftalmologista', array('action' => 'add', 'novalidate' => 'true'));

echo $this->Form->input('nome');
echo $this->Form->input('email', array('label' => 'E-mail'));
echo $this->Form->input('crmv', array('label' => 'CRMV'));

echo $this->Form->end('Savar');

?>
