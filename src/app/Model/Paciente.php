<?php

class Paciente extends AppModel{

	public $name = "Paciente";
	
    public $belongsTo = 'Proprietario';
    
    public $hasMany = 'Consulta';

	public $validate = array(
        'nome' => array('rule' => 'notEmpty'),
        'especie' => array('rule' => 'notEmpty'),
        'raca' => array('rule' => 'notEmpty'),
        'sexo' => array('rule' => 'notEmpty'),
        'proprietario_id' => array('rule' => 'notEmpty')
    );

}

?>
