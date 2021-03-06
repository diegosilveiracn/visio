<?php

class UsersController extends AppController{

  public $helpers = array ('Html','Form');

  public $name = 'Users';

	public $paginate = array(
        'limit' => 10,
        'order' => array('Oftalmologista.nome' => 'ASC'));

	public function isAuthorized($user) {
		if ($this->action === 'logout' || $this->action === 'password') {
            return true;
        } else if (isset($user['role']) && $user['role'] === '1') {
					return true;
		} else return false;
	}

    public function index() {
		    $users = $this->paginate('User');
        $this->set('users', $users);
    }

    public function view($id = null) {
        $this->User->id = $id;
        $this->set('user', $this->User->read());
    }

    public function add() {
        if ($this->request->is('post')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash('Cadastro realizado com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }

        $oftalmologistas = $this->User->Oftalmologista->find('list', array('fields' => array('id','nome'), 'conditions' => 'Oftalmologista.id NOT IN (select oftalmologista_id from users)', 'order' => array('Oftalmologista.nome ASC')));
        $this->set('oftalmologistas', $oftalmologistas);
    }

    public function edit($id = null) {
        $this->User->id = $id;

        if ($this->request->is('get')) {
            $this->request->data = $this->User->read();
        } else {
            if ($this->User->save($this->request->data)) {
               $this->Session->setFlash('Alteração realizada com sucesso!');
               $this->redirect(array('action' => 'index'));
            }
        }

        $oftalmologistas = $this->User->Oftalmologista->find('list' , array('fields' => array('id','nome'), 'order' => array('Oftalmologista.nome ASC')));
    		$this->set('oftalmologistas', $oftalmologistas);
    }

    public function delete($id = null) {
        if ($this->User->delete($id)) {
            $this->Session->setFlash('Exclusão realizada com sucesso!');
            $this->redirect(array('action' => 'index'));
        }
    }

	public function login() {
    $this->layout="default-login";

    if($this->Session->check('Auth.User')){
      $this->redirect($this->Auth->redirect());
    } else {
      if (!$this->request->is('get')) {
  			if ($this->Auth->login()) {
  				$this->redirect($this->Auth->redirect());
  			} else {
  				$this->Session->setFlash(__('Usuário e/ou senha inválido(s)!'));
  			}
  		}
    }
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}

  public function password(){
    if($this->request->is('post')){
      if($this->request->data['User']['new_password'] === $this->request->data['User']['confirm_password'] ){
        $this->request->data['User']['id'] =  $this->Session->read('Auth.User.id');
        $this->request->data['User']['password'] = $this->request->data['User']['new_password'];
        if ($this->User->save($this->request->data)) {
           $this->Session->setFlash('Alteração realizada com sucesso!');
           $this->redirect(array('controller' => 'opcoes' ,'action' => 'index'));
        }
      }else{
        $this->Session->setFlash(__('As senhas são diferentes!'));
      }
    }
  }
}

?>
