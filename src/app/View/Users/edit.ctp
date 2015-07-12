<h3>Alteração de Usuário</h3>

<?php

echo $this->Form->create('User', array('action' => 'edit'));

echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('oftalmologista_id', array('label' => 'Oftalmologista','disabled' , 'options' => $oftalmologistas, 'empty' => ''));
echo $this->Form->input('role', array('options' => array('1' => 'Administrador',
                                                         '2' => 'Simples',
                                 ),
                               'label' => 'Regra de Acesso')
                        );

echo $this->Form->end('Alterar');

?>
