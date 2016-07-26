<?php

class PagesController extends AppController {

	public function display() {
		  $this->loadModel('Proprietario');
			$this->loadModel('Paciente');
			$this->loadModel('Consulta');
			$this->loadModel('Clinica');

			$this->set('pacientes', $this->Paciente->find('count'));
			$this->set('consultas', $this->Consulta->find('count'));
			$this->set('proprietarios', $this->Proprietario->find('count'));
			$this->set('clinicas', $this->Clinica->find('count'));
	}
}
