<h1 class="ls-title-intro ls-ico-book">Pacientes</h1>

<?php
$msg = $this->Session->flash();
if ($msg != null){
  ?>
  <div class="ls-alert-success ls-dismissable">
    <span data-ls-module="dismiss" class="ls-dismiss">&times;</span>
    <?php echo $msg; ?>
  </div>
  <?php }?>

  <?php echo $this->Html->link('Adicionar Paciente',	array ('controller' => 'pacientes', 'action' => 'add', $proprietario_id), array('class' => 'ls-btn')); ?>
  <?php echo $this->Html->link('Buscar',	array ('controller' => 'pacientes', 'action' => 'search', $proprietario_id), array('class' => 'ls-btn')); ?>

  <table  class="ls-table">
    <thead>
      <tr>
        <th><?php echo $this->Paginator->sort('nome', 'Nome'); ?></th>
        <th>Espécie</th>
        <th><?php echo $this->Paginator->sort('Proprietario.nome', 'Proprietário'); ?></th>
        <th></th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($pacientes as $paciente): ?>
        <tr>
          <td><?php echo $this->Html->link($paciente['Paciente']['nome'], array ('controller' => 'pacientes', 'action' => 'view', $paciente['Paciente']['id'])); ?></td>

          <td><?php echo $paciente['Paciente']['especie']?></td>

          <td>
            <?php echo $this->Html->link($paciente['Proprietario']['nome'],
            array('controller' => 'proprietarios', 'action' => 'view', $paciente['Proprietario']['id'])); ?>
          </td>

          <td>
            <div data-ls-module="dropdown" class="ls-dropdown">
              <a class="ls-btn" href="#">Opções</a>
              <ul class="ls-dropdown-nav">
                <li><?php echo $this->Html->link('Consulta', array ('controller' => 'consultas', 'action' => 'index', $paciente['Paciente']['id'])); ?></li>
                <li><?php echo $this->Html->link('Visualizar', array ('controller' => 'pacientes', 'action' => 'view', $paciente['Paciente']['id'])); ?></li>
                <li><?php echo $this->Html->link('Editar', array ('action' => 'edit', $paciente['Paciente']['id'])); ?></li>
                <li>
                  <?php echo $this->Html->link('Excluir',
                  array('action' => 'delete', $paciente['Paciente']['id'], $paciente['Proprietario']['id']),
                  array('confirm' => 'Tem certeza que deseja excluir?', 'class' => 'ls-color-danger ls-divider'));
                  ?>
                </li>
              </ul>
            </div>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
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
