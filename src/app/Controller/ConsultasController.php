<?php

class ConsultasController extends AppController {

  public $helpers = array ('Html','Form');

  public $name = 'Consultas';

	public $paginate = array(
        'limit' => 10,
        'order' => array('Consulta.created' => 'DESC'));

	public function isAuthorized($user) {
		if (isset($user['role']) && $user['role'] === '1') {
			return true;
		} else if (in_array($this->action, array('edit', 'delete'))) {
			$consultaId = (int) $this->request->params['pass'][0];
            return $this->Consulta->isOwnedBy($consultaId, $user['oftalmologista_id']);
		} else return true;
	}

  public function index($paciente_id = null) {
			if($paciente_id == null){
				$consultas =  $this->paginate('Consulta');
			}else{
				$consultas =  $this->paginate('Consulta', array('Paciente.id' => $paciente_id));
			}

			$this->set('consultas', $consultas);
      $this->set('paciente_id', $paciente_id);
    }

    public function view($id = null) {
        $this->Consulta->id = $id;
        $this->set('consulta', $this->Consulta->read());
    }

    public function add($paciente_id = null) {
        if ($this->request->is('post')) {
            $this->request->data['Consulta']['oftalmologista_id'] = $this->Auth->user('oftalmologista_id');
            if ($this->Consulta->save($this->request->data)) {
                $this->Session->setFlash('Cadastro realizado com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }

        $this->getPacientes($paciente_id);
        $this->getClinicas();
    }

    public function edit($id = null, $paciente_id = null) {
        $this->Consulta->id = $id;

        if ($this->request->is('get')) {
            $this->request->data = $this->Consulta->read();
        } else {
            if ($this->Consulta->save($this->request->data)) {
               $this->Session->setFlash('Alteração realizada com sucesso!');
               $this->redirect(array('action' => 'index'));
            }
        }

        $this->getPacientes($paciente_id);
        $this->getClinicas();
    }

    public function delete($id) {
        if ($this->Consulta->delete($id)) {
            $this->Session->setFlash('Exclusão realizada com sucesso!');
            $this->redirect(array('action' => 'index'));
        }
    }

    private function getPacientes($paciente_id = null){
		if ($paciente_id == null) {
            $pacientes = $this->Consulta->Paciente->find('list' , array('fields' => array('id','nome'), 'order' => array('Paciente.nome ASC')));
		}else{
			$pacientes = $this->Consulta->Paciente->find('list' , array('conditions' => array('Paciente.id' => $paciente_id), 'fields' => array('id','nome')));
		}

		$this->set('pacientes', $pacientes);
    }

    private function getClinicas(){
        $clinicas = $this->Consulta->Clinica->find('list' , array('fields' => array('id','nome'), 'order' => array('Clinica.nome ASC')));
		$this->set('clinicas', $clinicas);
    }
}

?>
