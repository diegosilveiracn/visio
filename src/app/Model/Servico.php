<?php

class Servico extends AppModel{

    public $name = 'Servico';

    public $validate = array(
         'descricao' => array(
                   'rule' => 'notEmpty',
                   'message' => 'O campo "descrição" é obrigatorio!'
                 ),
         'valor' => array(
                   'rule' => array('decimal', '2'),
                   'message' => 'O campo "valor" é obrigatorio!'
                 )
      );
}

?>
