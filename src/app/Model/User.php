<?php

App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel{

  public $name = 'User';

  public $belongsTo = 'Oftalmologista';

	public $validate = array(
        'oftalmologista_id' => array(
                        'rule' => 'notEmpty',
                        'message' => 'O campo "oftalmologista" é obrigatório!'
                        ),
        'username' => array(
                        'rule' => 'notEmpty',
                        'message' => 'O campo "usuário" é obrigatório!'
                        ),
        'password' => array(
                        'rule' => 'notEmpty',
                        'message' => 'O campo "senha é obrigatório!"'
                        ),
        'new_password' => array(
                        'rule' => 'notEmpty',
                        'message' => 'O campo "nova senha" é obrigatório!'),
        'confirm_password' => array(
                        'rule' => 'notEmpty',
                        'message' => 'O campo "confirmar senha" é obrigatório!'),
        'role' => array('rule' => 'notEmpty')
    );

	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}

		return true;
	}

}

?>
