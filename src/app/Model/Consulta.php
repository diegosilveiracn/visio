<?php

class Consulta extends AppModel{

	 public $name = "Consulta";

   public $belongsTo = array('Paciente', 'Clinica', 'Oftalmologista');

	 public $validate = array(
				'created' => array(
											'rule' => 'notEmpty',
											'message' => 'O campo "data da consulta" é obrigatório!'
											),
				'tipo_consulta' => array(
														'rule' => 'notEmpty',
														'message' => 'O campo "tipo de consulta" é obrigatório!'
														),
        'paciente_id' => array(
														'rule' => 'notEmpty',
														'message' => 'O campo "paciente" é obrigatório!'
														),
        'clinica_id' => array(
														'rule' => 'notEmpty',
														'message' => 'O campo "clínica" é obrigatório!'
														),
        'oftalmologista_id' => array(
														'rule' => 'notEmpty',
														'message' => 'O campo "oftalmologista" é obrigatório!'),
        'historico' => array(
														'rule' => 'notEmpty',
														'message' => 'O campo "histórico" é obrigatório!'),
				'diagnostico' => array(
														'rule' => 'notEmpty',
														'message' => 'O campo "diagnóstico" é obrigatório!'),
				'tratamento' => array(
														'rule' => 'notEmpty',
														'message' => 'O campo "tratamento" é obrigatório!')
    );

	public function isOwnedBy($consultaId, $user) {
		return $this->field('id', array('id' => $consultaId, 'oftalmologista_id' => $user)) == $consultaId;
	}

}

?>
