<?php

class ClinicasController extends AppController {
	
    public $helpers = array ('Html','Form');
    
    public $name = 'Clinicas';
	
	public $paginate = array(
        'limit' => 10,
        'order' => array('Clinica.nome' => 'ASC'));
	
    public function index($id = null) {
		if($id == null){
			$clinicas = $this->paginate('Clinica');
        }else{
			$clinicas = $this->paginate('Clinica', array('Clinica.id' => $id));
		}
		
		$this->set('clinicas', $clinicas);
    }

    public function view($id = null) {
        $this->Clinica->id = $id;
        $this->set('clinica', $this->Clinica->read());
    }

    public function add() {
        if ($this->request->is('post')) {
            if ($this->Clinica->save($this->request->data)) {
                $this->Session->setFlash('Cadastro realizado com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function edit($id = null) {
        $this->Clinica->id = $id;
        
        if ($this->request->is('get')) {
            $this->request->data = $this->Clinica->read();
        } else {
            if ($this->Clinica->save($this->request->data)) {
               $this->Session->setFlash('Alteração realizada com sucesso!');
               $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function delete($id) {
        if ($this->Clinica->delete($id)) {
            $this->Session->setFlash('Exclusão realizada com sucesso!');
            $this->redirect(array('action' => 'index'));
        }
    }
}

?>
