<?php

class Oftalmologista extends AppModel{
	
    public $name = 'Oftalmologista';
 
	public $validate = array(
        'nome' => array('rule' => 'notEmpty')
    );
}

?>
