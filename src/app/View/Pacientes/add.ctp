<h1 class="ls-title-intro ls-ico-plus">Cadastro de Paciente</h1>

<?php

echo $this->Form->create('Paciente', array('action' => 'add', 'class' => 'ls-form row'));

echo $this->Form->input('id', array('type' => 'hidden'));

echo $this->Form->input('nome', array('div' => 'ls-label col-md-3'));
echo $this->Form->input('data_nascimento', array('div' => 'ls-label col-md-3', 'label' => 'Data de Nascimento', 'dateFormat' => 'DMY'));
echo $this->Form->input('especie', array('div' => 'ls-label col-md-3', 'label' => 'Espécie'));
echo $this->Form->input('raca', array('div' => 'ls-label col-md-3', 'label' => 'Raça'));

echo $this->Form->input('sexo', array('options' => array('M' => 'Macho',
'F' => 'Fêmea'
),
'empty' => '',
'div' => 'ls-label col-md-3'       )
);

echo $this->Form->input('proprietario_id', array('div' => 'ls-label col-md-3', 'label' => 'Proprietário', 'options' => $proprietarios, 'empty' => ''));

echo $this->Form->end(array('div' => 'ls-actions-btn', 'label' => 'Salvar', 'class' => 'ls-btn'));

?>
