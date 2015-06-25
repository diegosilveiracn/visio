<h3>Alteração de Oftalmologista</h3>

<?php
    echo $this->Form->create('Oftalmologista', array('action' => 'edit'));

    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->input('nome');
    echo $this->Form->input('email', array('label' => 'E-mail'));
    echo $this->Form->input('crmv', array('label' => 'CRMV'));

    echo $this->Form->end('Alterar');
?>
