<?php

class Clinica extends AppModel{

	 public $name = "Clinica";

	 public $hasMany = array(
		  'Consulta' => array('dependent' => true)
	 );

	 public $validate = array(
        'nome' => array(
					        'rule' => 'notEmpty',
					        'message' => 'O campo "nome" é obrigatorio!'
									)
     );

}

?>
