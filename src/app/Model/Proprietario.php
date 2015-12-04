<?php

class Proprietario extends AppModel{

    public $name = 'Proprietario';

    public $hasMany = array(
      'Paciente' => array('dependent' => true)
    );

	  public $validate = array(
        'nome' => array(
                  'rule' => 'notEmpty',
                  'message' => 'O campo "nome" é obrigatório!'),
        'telefone' => array(
                  'rule' => 'notEmpty',
                  'message' => 'O campo "telefone" é obrigatório!')
    );
}

?>
