<?php

class Clinica extends AppModel{

	public $name = "Clinica";

	 public $validate = array(
        'nome' => array(
					        'rule' => 'notEmpty',
					        'message' => 'O campo "nome" é obrigatorio!'
									)
     );

}

?>
