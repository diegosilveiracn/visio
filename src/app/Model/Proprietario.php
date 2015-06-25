<?php

class Proprietario extends AppModel{

    public $name = 'Proprietario';
    
    public $hasMany = 'Paciente';

	public $validate = array(
        'nome' => array('rule' => 'notEmpty'),
        'telefone' => array('rule' => 'notEmpty')
    );
}

?>
