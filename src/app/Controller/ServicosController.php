<?php

class ServicosController extends AppController {

    public $helpers = array ('Html','Form');

    public $name = 'Servicos';

    public $paginate = array(
          'limit' => 10,
          'order' => array('Servico.descricao' => 'ASC'));

    public function index($consulta_id = null) {
			  $servicos = $this->paginate('Servico', array('Servico.consulta_id'=> $consulta_id));

		    $this->set('servicos', $servicos);
        $this->set('consulta_id', $consulta_id);
    }

    public function add($consulta_id = null) {

      if ($this->request->is('post')) {
          if ($this->Servico->save($this->request->data)) {
              $this->Session->setFlash('Cadastro realizado com sucesso!');
              $this->redirect(array('action' => 'index', $this->request->data['Servico']['consulta_id']));
          }
      }

      $this->request->data['Servico']['consulta_id'] =  $consulta_id;
    }

    public function edit($id = null) {
      $this->Servico->id = $id;

      if ($this->request->is('get')) {
          $this->request->data = $this->Servico->read();
      } else {
          if ($this->Servico->save($this->request->data)) {
             $this->Session->setFlash('Alteração realizada com sucesso!');
             $this->redirect(array('action' => 'index', $this->request->data['Servico']['consulta_id']));
          }
      }
    }

    public function delete($id, $consulta_id) {
      if ($this->Servico->delete($id)) {
          $this->Session->setFlash('Exclusão realizada com sucesso!');
          $this->redirect(array('action' => 'index', $consulta_id));
      }
    }
}

?>
