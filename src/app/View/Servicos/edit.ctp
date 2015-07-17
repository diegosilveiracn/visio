<h3>Alteração de Serviço</h3>

<?php
    echo $this->Form->create('Servico', array('action' => 'edit', 'novalidate' => true));

    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->input('consulta_id', array('type' => 'hidden'));
    echo $this->Form->input('descricao', array('label' => 'Descrição'));
    echo $this->Form->input('valor');

    echo $this->Form->end('Alterar');
?>
