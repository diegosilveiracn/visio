<h1 class="ls-title-intro ls-ico-book">Clínicas Veterinária</h1>

<?php
$msg = $this->Session->flash();
if ($msg != null){
  ?>
  <div class="ls-alert-success ls-dismissable">
    <span data-ls-module="dismiss" class="ls-dismiss">&times;</span>
    <?php echo $msg; ?>
  </div>
  <?php }?>

  <?php echo $this->Html->link('Adicionar Clínica', array('controller' => 'clinicas', 'action' => 'add'), array('class' => 'ls-btn')); ?>

  <table class="ls-table">
    <thead>
      <tr>
        <th><?php echo $this->Paginator->sort('nome', 'Nome'); ?></th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th></th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($clinicas as $clinica): ?>
        <tr>
          <td>
            <?php echo $this->Html->link($clinica['Clinica']['nome'], array('controller' => 'clinicas', 'action' => 'view', $clinica['Clinica']['id'])); ?>
          </td>

          <td><?php echo $clinica['Clinica']['email']?></td>

          <td><?php echo $clinica['Clinica']['telefone']?></td>

          <td>
            <div data-ls-module="dropdown" class="ls-dropdown">
              <a class="ls-btn" href="#">Opções</a>
              <ul class="ls-dropdown-nav">
                <li>
                  <?php echo $this->Html->link('Visualizar', array('controller' => 'clinicas', 'action' => 'view', $clinica['Clinica']['id'])); ?>
                </li>
                <li>
                  <?php echo $this->Html->link('Editar', array('action' => 'edit', $clinica['Clinica']['id'])); ?>
                </li>
                <li>
                  <?php echo $this->Html->link('Excluir',
                  array('action' => 'delete', $clinica['Clinica']['id']),
                  array('confirm' => 'Tem certeza que deseja excluir?', 'class'=> 'ls-color-danger ls-divider'));
                  ?>
                </li>
              </ul>
            </div>
          </td>
        </tr>
      <?php endforeach; ?>
      <tbody>
      </table>

      <div class="ls-pagination-filter">
        <ul class="ls-pagination">
          <?php
          echo $this->Paginator->first("Início", array('tag' => 'li', 'class' => false));

          if($this->Paginator->hasPrev()){
            echo $this->Paginator->prev("Anterior", array('tag' => 'li', 'class' => false));
          }

          echo $this->Paginator->numbers(array('separator' => false , 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'ls-active'));

          if($this->Paginator->hasNext()){
            echo $this->Paginator->next("Próximo", array('tag' => 'li', 'class' => false));
          }

          echo $this->Paginator->last("Fim", array('tag' => 'li', 'class' => false));
          ?>
        </ul>
      </div>
