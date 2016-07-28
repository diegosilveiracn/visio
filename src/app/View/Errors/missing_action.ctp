<div class="container-fluid">
      <div class="ls-box ls-no-bg ls-box-error">
        <h1 class="ls-title-intro ls-ico-thumbs-up2">Página não encontrada!</h1>
        <p>O conteúdo pode ter sido removido ou não estar mais disponível.</p>
        <p>Se o problema persistir, entre em contato com o administrador do sistema.</p>

        <p><strong>Você pode:</strong></p>
        <ol>
          <li>Verificar se digitou corretamente o endereço desejado.</li>
          <li>Retornar à <a href="<?php echo $this->Html->url(array("controller" => "pages", "action" => "display", "bar"));?>" class="ls-color-theme">página inicial.</a></li>
        </ol>

        <div data-ls-module="collapse" data-target="#0" class="ls-collapse ">
          <a href="#" class="ls-collapse-header">
            <h3 class="ls-collapse-title">Detalhes</h3>
          </a>
          <div class="ls-collapse-body" id="0">
            <p>
              <strong>Error:</strong><?php echo __d('cake_dev', 'The action %1$s is not defined in controller %2$s', '<em>' . h($action) . '</em>', '<em>' . h($controller) . '</em>'); ?>
            </p>

            <p>
              <?php echo $this->element('exception_stack_trace');?>
            </p>
          </div>
        </div>
      </div>
</div>
