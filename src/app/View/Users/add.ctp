<h1 class="ls-title-intro ls-ico-plus">Cadastro de Usuário</h1>

<?php

echo $this->Form->create('User', array('action' => 'add', 'class' => 'ls-form row'));

echo $this->Form->input('oftalmologista_id', array('div' => 'ls-label col-md-3', 'label' => 'Oftalmologista', 'options' => $oftalmologistas, 'empty' => ''));
echo $this->Form->input('username', array('div' => 'ls-label col-md-3', 'label' => 'Usuário'));
echo $this->Form->input('password', array('div' => 'ls-label col-md-3', 'label' => 'Senha'));
echo $this->Form->input('role', array('div' => 'ls-label col-md-3', 'label' => 'Regra de Acesso',
'options' => array('1' => 'Administrador', '2' => 'Simples'),
'default' => '2',
'div' => 'ls-label col-md-3'
));

echo $this->Form->end(array('div' => 'ls-actions-btn', 'label' => 'Salvar', 'class' => 'ls-btn'));

?>
