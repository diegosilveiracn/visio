<?php
echo $this->Session->flash('auth');
?>

<div id="login">

<?php
echo $this->Form->create('User', array('action' => 'login', 'novalidate' => 'true'));

echo $this->Form->input('username', array('label' => 'Usuário'));
echo $this->Form->input('password', array('label' => 'Senha'));

echo $this->Form->end('Acessar');
?>

</div>
