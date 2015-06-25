<h3>Cadastro de Usuário</h3>

<?php echo $this->Form->create('User');?>
			
<?php 
echo $this->Form->input('oftalmologista_id', array('label' => 'Oftalmologista', 'options' => $oftalmologistas, 'empty' => ''));
echo $this->Form->input('username', array('label' => 'Usuário'));
echo $this->Form->input('password', array('label' => 'Senha'));
echo $this->Form->input('role', array('label' => 'Regra de Acesso',
            'options' => array('1' => 'Administrador', '2' => 'Simples'),
            'default' => '2'
        ));
?>

<?php echo $this->Form->end(__('Salvar'));?>
