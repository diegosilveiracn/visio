<?php
$msg = $this->Session->flash();

if ($msg != null){
  ?>
  <div class="ls-alert-danger ls-dismissable">
    <span data-ls-module="dismiss" class="ls-dismiss">&times;</span>
    <?php echo $msg;?>
  </div>
  <?php
}
$msg = $this->Session->flash('auth');

if ($msg != null ) {
  ?>
  <div class="ls-alert-danger ls-dismissable">
    <span data-ls-module="dismiss" class="ls-dismiss">&times;</span>
    <?php echo $msg;?>
  </div>
  <?php
}
?>

<?php
echo $this->Form->create('User', array('action' => 'login', 'class' => 'ls-form ls-login-form'));
?>

<label class="ls-label">
  <b class="ls-label-text ls-hidden-accessible">Usuário</b>
  <?php
  echo $this->Form->input('username', array('label' => false, 'placeholder' => 'Usuário', 'class' => 'ls-login-bg-user ls-field-lg', 'div' => false));
  ?>
</label>

<label class="ls-label">
  <b class="ls-label-text ls-hidden-accessible">Senha</b>
  <div class="ls-prefix-group">
    <?php
    echo $this->Form->input('password', array('label' => false, 'placeholder' => 'Senha', 'class' => 'ls-login-bg-password ls-field-lg', 'div' => false));
    ?>
    <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#UserPassword" href="#"></a>
  </div>

</label>

<?php
echo $this->Form->end(array('label' => 'Entrar', 'class' => 'ls-btn-primary ls-btn-block ls-btn-lg', 'div' => false));
?>
