<h3>Cadastro de Serviço</h3>

<?php

echo $this->Form->create('Servico', array('action' => 'add', 'novalidate' => 'true'));

echo $this->Form->input('consulta_id', array('type' => 'hidden'));
echo $this->Form->input('descricao', array('label' => 'Descrição'));
echo $this->Form->input('valor');

echo $this->Form->end('Savar');

?>
