<?php

class Consulta extends AppModel{

	public $name = "Consulta";
    
    public $belongsTo = array('Paciente', 'Clinica', 'Oftalmologista');

	 public $validate = array(
		'created' => array('rule' => 'notEmpty'),
		'tipo_consulta' => array('rule' => 'notEmpty'),
        'paciente_id' => array('rule' => 'notEmpty'),
        'clinica_id' => array('rule' => 'notEmpty'),
        'oftalmologista_id' => array('rule' => 'notEmpty'),
        'historico' => array('rule' => 'notEmpty')
    );

	public function isOwnedBy($consultaId, $user) {
		return $this->field('id', array('id' => $consultaId, 'oftalmologista_id' => $user)) == $consultaId;
	}

}

?>
