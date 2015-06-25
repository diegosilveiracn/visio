<?php

class PacientesController extends AppController {

    public $helpers = array ('Html','Form');
    
    public $name = 'Pacientes';

	public $paginate = array(
        'limit' => 10,
        'order' => array('Paciente.nome' => 'ASC'));

    public function index($proprietario_id = null, $id = null) {
		if($id != null){
			$pacientes = $this->paginate('Paciente', array('Paciente.id' => $id));
		}else if ($proprietario_id != null) {
			$pacientes = $this->paginate('Paciente', array('Paciente.proprietario_id' => $proprietario_id));
		}else{
			$pacientes = $this->paginate('Paciente');
		}

		$this->set('pacientes', $pacientes);
		$this->set('proprietario_id', $proprietario_id);
    }

    public function view($id = null) {
        $this->Paciente->id = $id;
        $this->set('paciente', $this->Paciente->read());
    }

    public function add($proprietario_id = null) {
        if ($this->request->is('post')) {
            if ($this->Paciente->save($this->request->data)) {
                $this->Session->setFlash('Cadastro realizado com sucesso!');
                $this->redirect(array('action' => 'index', $this->request->data['Paciente']['proprietario_id']));
            }
        }

		$this->getProprietarios($proprietario_id);
    }

    public function edit($id = null) {
        $this->Paciente->id = $id;

        if ($this->request->is('get')) {
            $this->request->data = $this->Paciente->read();
        } else {
            if ($this->Paciente->save($this->request->data)) {
               $this->Session->setFlash('Alteração realizada com sucesso!');
			   $this->redirect(array('action' => 'index', $this->request->data['Paciente']['proprietario_id']));
            }
        }

		$this->getProprietarios();
    }

    public function delete($id) {
        if ($this->Paciente->delete($id)) {
            $this->Session->setFlash('Exclusão realizada com sucesso!');
            $this->redirect(array('action' => 'index'));
        }
    }

    private function getProprietarios($proprietario_id = null){
		if ($proprietario_id == null) {
            $proprietarios = $this->Paciente->Proprietario->find('list' , array('fields' => array('id','nome'), 'order' => array('Proprietario.nome ASC')));
		}else{ 
			$proprietarios = $this->Paciente->Proprietario->find('list' , array('conditions' => array('Proprietario.id' => $proprietario_id), 'fields' => array('id','nome')));
		}

		$this->set('proprietarios', $proprietarios);
    }
}

?>
