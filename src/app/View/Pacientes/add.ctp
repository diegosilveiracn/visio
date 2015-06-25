<h3>Cadastro de Paciente</h3>

<?php

echo $this->Form->create('Paciente');

echo $this->Form->input('id', array('type' => 'hidden'));

echo $this->Form->input('nome');
echo $this->Form->input('data_nascimento', array('label' => 'Data de Nascimento', 'dateFormat' => 'DMY'));
echo $this->Form->input('especie', array('label' => 'Espécie'));	 
echo $this->Form->input('raca', array('label' => 'Raça'));

echo $this->Form->input('sexo', array('options' => array('M' => 'Macho', 
                                                         'F' => 'Fêmea'
                                                        ),
    						'empty' => ''	
                                     )
                       );

echo $this->Form->input('proprietario_id', array('label' => 'Proprietário', 'options' => $proprietarios, 'empty' => ''));

echo $this->Form->end('Savar');

?>
