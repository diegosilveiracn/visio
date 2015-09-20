<?php

class ProprietariosController extends AppController {

    public $helpers = array ('Html','Form');

    public $name = 'Proprietarios';

	public $paginate = array(
        'limit' => 10,
        'order' => array('Proprietario.nome' => 'ASC'));

    public function index($id = null) {
		if($id == null){
			$proprietarios = $this->paginate('Proprietario');
        }else{
			$proprietarios = $this->paginate('Proprietario', array('Proprietario.id' => $id));
		}

		$this->set('proprietarios', $proprietarios);
    }

    public function view($id = null) {
        $this->Proprietario->id = $id;
        $this->set('proprietario', $this->Proprietario->read());
    }

    public function add() {
        if ($this->request->is('post')) {
            if ($this->Proprietario->save($this->request->data)) {
                $this->Session->setFlash('Cadastro realizado com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function edit($id = null) {
        $this->Proprietario->id = $id;

        if ($this->request->is('get')) {
            $this->request->data = $this->Proprietario->read();
        } else {
            if ($this->Proprietario->save($this->request->data)) {
               $this->Session->setFlash('Alteração realizada com sucesso!');
               $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function delete($id) {
        if ($this->Proprietario->delete($id)) {
            $this->Session->setFlash('Exclusão realizada com sucesso!');
            $this->redirect(array('action' => 'index'));
        }
    }

		public function search(){
			if ($this->request->is('post')) {
				$proprietario = $this->paginate('Proprietario', array('Proprietario.nome LIKE' => '%'.$this->request->data['Proprietario']['parte_nome'].'%'));
			} else {
				$proprietario = $this->paginate('Proprietario');
			}

			$this->set('proprietarios', $proprietario);
		}
}

?>
