<?php

class Paciente extends AppModel{

		public $name = "Paciente";

    public $belongsTo = 'Proprietario';

    public $hasMany = 'Consulta';

		public $validate = array(
        'nome' => array(
											'rule' => 'notEmpty',
											'message' => 'O campo "nome" é obrigatório!'
											),
        'especie' => array(
											'rule' => 'notEmpty',
											'message' => 'O campo "espécie" é obrigatório!'
											),
        'raca' => array(
											'rule' => 'notEmpty',
											'message' => 'O campo "raça" é obrigatório!'
											),
        'sexo' => array(
											'rule' => 'notEmpty',
											'message' => 'O campo "sexo" é obrigatório!'
											),
        'proprietario_id' => array(
											'rule' => 'notEmpty',
											'message' => 'O campo "proprietário" é obrigatório!'
											)
    );

}

?>
