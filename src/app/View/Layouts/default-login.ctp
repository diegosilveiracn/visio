<!DOCTYPE html>

<html class="ls-theme-gray">

<head>
  <title>Login Visio</title>

  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="description" content="Insira aqui a descrição da página.">
  <?php echo $this->Html->css('locastyle'); ?>
</head>

<body class="documentacao documentacao_exemplos documentacao_exemplos_login-screen documentacao_exemplos_login-screen_index">

  <div class="ls-login-parent">
    <div class="ls-login-inner">
      <div class="ls-login-container">
        <div class="ls-login-box">
          <h1 class="ls-login-logo">Visio</h1>

          <?php echo $this->fetch('content'); ?>

        </div>
      </div>
    </div>
  </div>

  <?php echo $this->Html->script('jquery-2.1.4.min');?>
  <?php echo $this->Html->script('locastyle');?>
</body>
</html>
