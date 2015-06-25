<?php

class OftalmologistasController extends AppController {
	
    public $helpers = array ('Html','Form');
    
    public $name = 'Oftalmologistas';

	public $paginate = array(
        'limit' => 10,
        'order' => array('Oftalmologista.nome' => 'ASC'));

    public function index($id = null) {
		if($id == null){
			$oftalmologistas = $this->paginate('Oftalmologista');
        }else{
			$oftalmologistas = $this->paginate('Oftalmologista', array('Oftalmologista.id' => $id));
		}
		
		$this->set('oftalmologistas', $oftalmologistas);
    }

    public function view($id = null) {
        $this->Oftalmologista->id = $id;
        $this->set('oftalmologista', $this->Oftalmologista->read());
    }

    public function add() {
        if ($this->request->is('post')) {
            if ($this->Oftalmologista->save($this->request->data)) {
                $this->Session->setFlash('Cadastro realizado com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function edit($id = null) {
        $this->Oftalmologista->id = $id;

        if ($this->request->is('get')) {
            $this->request->data = $this->Oftalmologista->read();
        } else {
            if ($this->Oftalmologista->save($this->request->data)) {
               $this->Session->setFlash('Alteração realizada com sucesso!');
               $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function delete($id) {
        if ($this->Oftalmologista->delete($id)) {
            $this->Session->setFlash('Exclusão realizada com sucesso!');
            $this->redirect(array('action' => 'index'));
        }
    }
}

?>
