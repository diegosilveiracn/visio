<?php

class ConsultasController extends AppController {

  public $name = 'Consultas';

  public $helpers = array ('Html','Form');

  public $components = array('Upload');

	public $paginate = array(
        'limit' => 10,
        'order' => array('Consulta.created' => 'DESC'));

	public function isAuthorized($user) {
		if (isset($user['role']) && $user['role'] === '1') {
			return true;
		} else if (in_array($this->action, array('view', 'view_retorno', 'edit', 'edit_retorno', 'delete', 'delete_retorno'))) {
			$consultaId = (int) $this->request->params['pass'][0];
            return $this->Consulta->isOwnedBy($consultaId, $user['oftalmologista_id']);
		} else return true;
	}

  public function index($paciente_id = null) {
      $this->Consulta->recursive = 2;

			if($paciente_id == null){
				$consultas =  $this->paginate('Consulta', array('Consulta.consulta_id is null'));
			}else{
				$consultas =  $this->paginate('Consulta', array('Paciente.id' => $paciente_id, 'Consulta.consulta_id is null'));
			}

			$this->set('consultas', $consultas);
      $this->set('paciente_id', $paciente_id);
    }

    public function index_retorno($paciente_id = null, $consulta_id = null){
      $consultas =  $this->paginate('Consulta', array('Consulta.consulta_id' => $consulta_id));

      $this->set('consultas', $consultas);
      $this->set('paciente_id', $paciente_id);
      $this->set('consulta_id', $consulta_id);
    }

    public function view($id = null) {
        $this->Consulta->id = $id;
        $this->set('consulta', $this->Consulta->read());
    }

    public function view_retorno($id = null) {
        $this->Consulta->id = $id;
        $this->set('consulta', $this->Consulta->read());
    }

    public function add($paciente_id = null) {
        if ($this->request->is('post')) {
            $this->Consulta->create();

            if (!empty($this->request->data['Consulta']['upload_d']['name'])) {
                if ($this->Upload->copyUploadedImage($this->request->data['Consulta']['upload_d'])) {
                  $this->request->data['Consulta']['imagem_d'] = $this->request->data['Consulta']['upload_d']['name'];
                } else{
                  $this->Session->setFlash('Falha: arquivo já existente ou formato inválido!');
                  $this->redirect(array('action' => 'index', $this->request->data['Consulta']['paciente_id']));
                }
            }

            if (!empty($this->request->data['Consulta']['upload_e']['name'])) {
                if ($this->Upload->copyUploadedImage($this->request->data['Consulta']['upload_e'])) {
                  $this->request->data['Consulta']['imagem_e'] = $this->request->data['Consulta']['upload_e']['name'];
                } else{
                  $this->Session->setFlash('Falha: arquivo já existente ou formato inválido!');
                  $this->redirect(array('action' => 'index', $this->request->data['Consulta']['paciente_id']));
                }
            }

            $this->request->data['Consulta']['oftalmologista_id'] = $this->Auth->user('oftalmologista_id');
            $this->request->data['Consulta']['created'] = date('Y-m-d', strtotime(str_replace('/', '-',$this->request->data['Consulta']['data_consulta'])));

            if ($this->Consulta->save($this->request->data)) {
                $this->Session->setFlash('Cadastro realizado com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }

        $this->getPacientes($paciente_id);
        $this->getClinicas();
    }

    public function add_retorno($paciente_id = null, $consulta_id = null) {
        if ($this->request->is('post')) {
            $this->Consulta->create();

            if (!empty($this->request->data['Consulta']['upload_d']['name'])) {
                if ($this->Upload->copyUploadedImage($this->request->data['Consulta']['upload_d'])) {
                  $this->request->data['Consulta']['imagem_d'] = $this->request->data['Consulta']['upload_d']['name'];
                } else{
                  $this->Session->setFlash('Falha: arquivo já existente ou formato inválido!');
                  $this->redirect(array('action' => 'index_retorno', $this->request->data['Consulta']['paciente_id'], $this->request->data['Consulta']['consulta_id']));
                }
            }

            if (!empty($this->request->data['Consulta']['upload_e']['name'])) {
                if ($this->Upload->copyUploadedImage($this->request->data['Consulta']['upload_e'])) {
                  $this->request->data['Consulta']['imagem_e'] = $this->request->data['Consulta']['upload_e']['name'];
                } else{
                  $this->Session->setFlash('Falha: arquivo já existente ou formato inválido!');
                  $this->redirect(array('action' => 'index_retorno', $this->request->data['Consulta']['paciente_id'], $this->request->data['Consulta']['consulta_id']));
                }
            }

            $this->request->data['Consulta']['oftalmologista_id'] = $this->Auth->user('oftalmologista_id');
            $this->request->data['Consulta']['created'] = date('Y-m-d', strtotime(str_replace('/', '-',$this->request->data['Consulta']['data_retorno'])));

            if ($this->Consulta->save($this->request->data)) {
                $this->Session->setFlash('Cadastro realizado com sucesso!');
                $this->redirect(array('action' => 'index_retorno', $this->request->data['Consulta']['paciente_id'], $this->request->data['Consulta']['consulta_id']));
            }
        }

        $this->set('paciente_id', $paciente_id);
        $this->set('consulta_id', $consulta_id);
        $this->getClinicas();
    }

    public function edit($id = null, $paciente_id = null) {
        $this->Consulta->id = $id;

        if ($this->request->is('get')) {
            $this->request->data = $this->Consulta->read();
            $this->request->data['Consulta']['data_consulta'] = date('d/m/Y', strtotime($this->request->data['Consulta']['created']));
            $this->set('imagem_d', $this->request->data['Consulta']['imagem_d']);
            $this->set('imagem_e', $this->request->data['Consulta']['imagem_e']);
        } else {
            $this->Consulta->create();

            if (!empty($this->request->data['Consulta']['upload_d']['name'])) {
                if ($this->Upload->copyUploadedImage($this->request->data['Consulta']['upload_d'])) {
                  $this->Upload->deleteUploadedImage($this->request->data['Consulta']['imagem_d']);
                  $this->request->data['Consulta']['imagem_d'] = $this->request->data['Consulta']['upload_d']['name'];
                } else{
                  $this->Session->setFlash('Falha: arquivo já existente ou formato inválido!');
                  $this->redirect(array('action' => 'index', $this->request->data['Consulta']['paciente_id']));
                }
            }

            if (!empty($this->request->data['Consulta']['upload_e']['name'])) {
                if ($this->Upload->copyUploadedImage($this->request->data['Consulta']['upload_e'])) {
                  $this->Upload->deleteUploadedImage($this->request->data['Consulta']['imagem_e']);
                  $this->request->data['Consulta']['imagem_e'] = $this->request->data['Consulta']['upload_e']['name'];
                } else{
                  $this->Session->setFlash('Falha: arquivo já existente ou formato inválido!');
                  $this->redirect(array('action' => 'index', $this->request->data['Consulta']['paciente_id']));
                }
            }

            $this->request->data['Consulta']['created'] = date('Y-m-d', strtotime(str_replace('/', '-',$this->request->data['Consulta']['data_consulta'])));

            if ($this->Consulta->save($this->request->data)) {
               $this->Session->setFlash('Alteração realizada com sucesso!');
               $this->redirect(array('action' => 'index'));
            }
        }

        $this->getPacientes($paciente_id);
        $this->getClinicas();
    }

    public function edit_retorno($id) {
        $this->Consulta->id = $id;

        if ($this->request->is('get')) {
            $this->request->data = $this->Consulta->read();
            $this->request->data['Consulta']['data_retorno'] = date('d/m/Y', strtotime(str_replace('/', '-',$this->request->data['Consulta']['created'])));
            $this->set('imagem_d', $this->request->data['Consulta']['imagem_d']);
            $this->set('imagem_e', $this->request->data['Consulta']['imagem_e']);
        } else {
            $this->Consulta->create();

            if (!empty($this->request->data['Consulta']['upload_d']['name'])) {
                if ($this->Upload->copyUploadedImage($this->request->data['Consulta']['upload_d'])) {
                  $this->Upload->deleteUploadedImage($this->request->data['Consulta']['imagem_d']);
                  $this->request->data['Consulta']['imagem_d'] = $this->request->data['Consulta']['upload_d']['name'];
                } else{
                  $this->Session->setFlash('Falha: arquivo já existente ou formato inválido!');
                  $this->redirect(array('action' => 'index_retorno', $this->request->data['Consulta']['paciente_id'], $this->request->data['Consulta']['consulta_id']));
                }
            }

            if (!empty($this->request->data['Consulta']['upload_e']['name'])) {
                if ($this->Upload->copyUploadedImage($this->request->data['Consulta']['upload_e'])) {
                  $this->Upload->deleteUploadedImage($this->request->data['Consulta']['imagem_e']);
                  $this->request->data['Consulta']['imagem_e'] = $this->request->data['Consulta']['upload_e']['name'];
                } else{
                  $this->Session->setFlash('Falha: arquivo já existente ou formato inválido!');
                  $this->redirect(array('action' => 'index_retorno', $this->request->data['Consulta']['paciente_id'], $this->request->data['Consulta']['consulta_id']));
                }
            }

            $this->request->data['Consulta']['created'] = date('Y-m-d', strtotime($this->request->data['Consulta']['data_retorno']));

            if ($this->Consulta->save($this->request->data)) {
               $this->Session->setFlash('Alteração realizada com sucesso!');
               $this->redirect(array('action' => 'index_retorno', $this->request->data['Consulta']['paciente_id'], $this->request->data['Consulta']['consulta_id']));
            }
        }

        $this->getClinicas();
    }

    public function delete($id) {
        $this->Consulta->id = $id;
        $consulta = $this->Consulta->read();
        $this->Upload->deleteUploadedImage($consulta['Consulta']['imagem_d']);
        $this->Upload->deleteUploadedImage($consulta['Consulta']['imagem_e']);

        if ($this->Consulta->delete($id)) {
            $this->Session->setFlash('Exclusão realizada com sucesso!');
            $this->redirect(array('action' => 'index'));
        }
    }

    public function delete_retorno($id, $paciente_id, $consulta_id) {
        $this->Consulta->id = $id;
        $consulta = $this->Consulta->read();
        $this->Upload->deleteUploadedImage($consulta['Consulta']['imagem_d']);
        $this->Upload->deleteUploadedImage($consulta['Consulta']['imagem_e']);

        if ($this->Consulta->delete($id)) {
            $this->Session->setFlash('Exclusão realizada com sucesso!');
            $this->redirect(array('action' => 'index_retorno',$paciente_id, $consulta_id));
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
