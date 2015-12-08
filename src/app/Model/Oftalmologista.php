<?php

class Oftalmologista extends AppModel{

    public $name = 'Oftalmologista';

    public $hasMany = array(
 		  'Consulta' => array('dependent' => true)
 	  );

    public $hasOne = array(
  		'User' => array('dependent' => true)
  	);

	  public $validate = array(
			'nome' => array(
									'rule' => 'notEmpty',
	    						'message' => 'O campo "nome" é obrigatorio!'
								)
	  );
}

?>
