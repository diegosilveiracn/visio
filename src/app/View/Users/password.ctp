<h3>Alteração de Senha</h3>

<?php

echo $this->Form->create('User', array('action' => 'password'));

echo $this->Form->input('password', array('label' => 'Senha Atual'));
echo $this->Form->input('new', array('type' => 'password', 'label' => 'Nova Senha'));
echo $this->Form->input('confirm', array('type' => 'password','label' => 'Confirmar Senha'));

echo $this->Form->end('Alterar');

?>
