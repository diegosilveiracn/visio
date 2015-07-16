<h3>Alteração de Senha</h3>

<?php

echo $this->Form->create('User', array('action' => 'password', 'novalidate' => 'true'));

echo $this->Form->input('new_password', array('type' => 'password', 'label' => 'Nova Senha'));
echo $this->Form->input('confirm_password', array('type' => 'password','label' => 'Confirmar Senha'));

echo $this->Form->end('Alterar');

?>
