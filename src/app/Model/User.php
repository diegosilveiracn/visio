<?php

App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel{

  public $name = 'User';

  public $belongsTo = 'Oftalmologista';

	public $validate = array(
        'oftalmologista_id' => array('rule' => 'notEmpty'),
        'username' => array('rule' => 'notEmpty'),
        'password' => array('rule' => 'notEmpty'),
        'new_password' => array('rule' => 'notEmpty'),
        'confirm_password' => array('rule' => 'notEmpty'),
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
