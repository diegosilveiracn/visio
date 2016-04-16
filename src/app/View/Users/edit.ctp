<h1 class="ls-title-intro ls-ico-pencil">Alteração de Usuário</h1>

<?php

echo $this->Form->create('User', array('action' => 'edit', 'class' => 'ls-form row'));

echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('oftalmologista_id', array('div' => 'ls-label col-md-3', 'label' => 'Oftalmologista','disabled' , 'options' => $oftalmologistas, 'empty' => ''));
echo $this->Form->input('role', array('options' => array('1' => 'Administrador', '2' => 'Simples'),
'div' => 'ls-label col-md-3', 'label' => 'Regra de Acesso'));

echo $this->Form->end(array('div' => 'ls-actions-btn', 'label' => 'Alterar', 'class' => 'ls-btn'));

?>
