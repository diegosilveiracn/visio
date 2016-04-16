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

  <?php echo $this->Html->link('Novo',	array ('controller' => 'pacientes', 'action' => 'add',$proprietario_id), array('class' => 'ls-btn')); ?>
  <?php echo $this->Html->link('Buscar',	array ('controller' => 'pacientes', 'action' => 'search'), array('class' => 'ls-btn')); ?>

  <table  class="ls-table ls-bg-header ls-no-hover">
    <thead>
      <tr>
        <th></th>
        <th><?php echo $this->Paginator->sort('nome', 'Nome'); ?></th>
        <th>Espécie</th>
        <th><?php echo $this->Paginator->sort('Proprietario.nome', 'Proprietário'); ?></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($pacientes as $paciente): ?>
        <tr>
          <td>
            <?php echo $this->Html->link('Abrir', array ('controller' => 'pacientes', 'action' => 'view', $paciente['Paciente']['id']), array('class' => 'ls-btn ls-btn-xs')); ?>
          </td>

          <td><?php echo $paciente['Paciente']['nome']?></td>

          <td><?php echo $paciente['Paciente']['especie']?></td>

          <td>
            <?php echo $this->Html->link($paciente['Proprietario']['nome'],
            array('controller' => 'proprietarios', 'action' => 'index', $paciente['Proprietario']['id'])); ?>
          </td>

          <td>
            <?php echo $this->Html->link('Consulta', array ('controller' => 'consultas', 'action' => 'index', $paciente['Paciente']['id'])); ?>
          </td>

          <td>
            <?php echo $this->Html->link('Alterar', array ('action' => 'edit', $paciente['Paciente']['id']), array('class' => 'ls-btn ls-btn-xs')); ?>
          </td>

          <td>
            <?php echo $this->Html->link('Excluir',
            array('action' => 'delete', $paciente['Paciente']['id']),
            array('confirm' => 'Tem certeza que deseja excluir?', 'class' => 'ls-btn-danger ls-btn-xs'));
            ?>
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
