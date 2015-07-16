<?php

echo $this->Session->flash('auth');

echo $this->Form->create('User', array('action' => 'login', 'novalidate' => 'true'));

echo $this->Form->input('username', array('label' => 'Usuário'));
echo $this->Form->input('password', array('label' => 'Senha'));

echo $this->Form->end('Acessar');

?>
