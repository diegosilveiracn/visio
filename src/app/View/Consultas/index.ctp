<h1 class="ls-title-intro ls-ico-book">Consultas Médica</h1>

<?php
$msg = $this->Session->flash();
if ($msg != null){
  ?>
  <div class="ls-alert-success ls-dismissable">
    <span data-ls-module="dismiss" class="ls-dismiss">&times;</span>
    <?php echo $msg; ?>
  </div>
  <?php }?>

  <?php echo $this->Html->link('Adicionar Consulta', array('controller' => 'consultas', 'action' => 'add', $paciente_id), array('class' => 'ls-btn')); ?>

  <table class="ls-table">
    <thead>
      <tr>
        <th><?php echo $this->Paginator->sort('created', 'Data'); ?></th>
        <th><?php echo $this->Paginator->sort('Paciente.nome', 'Paciente'); ?></th>
        <th><?php echo $this->Paginator->sort('Proprietario.nome', 'Proprietário'); ?></th>
        <th><?php echo $this->Paginator->sort('Oftalmologista.nome', 'Oftalmologista'); ?></th>
        <th><?php echo $this->Paginator->sort('Clinica.nome', 'Clínica'); ?></th>
        <th></th>
      </tr>
    </thead>

    <tboby>
      <?php foreach ($consultas as $consulta): ?>
        <tr>

          <td>
            <?php $data = date('d/m/Y',strtotime($consulta['Consulta']['created']));?>
            <?php echo $this->Html->link($data, array ('controller' => 'consultas', 'action' => 'view', $consulta['Consulta']['id'])); ?>
          </td>

          <td>
            <?php echo $this->Html->link($consulta['Paciente']['nome'],
            array('controller' => 'pacientes', 'action' => 'view', $consulta['Paciente']['proprietario_id'], $consulta['Paciente']['id'])); ?>
          </td>

          <td>
            <?php echo $this->Html->link($consulta['Paciente']['Proprietario']['nome'],
            array('controller' => 'proprietarios', 'action' => 'view', $consulta['Paciente']['Proprietario']['id'])); ?>
          </td>

          <td>
            <?php echo $this->Html->link($consulta['Oftalmologista']['nome'],
            array('controller' => 'oftalmologistas', 'action' => 'view', $consulta['Oftalmologista']['id'])); ?>
          </td>

          <td>
            <?php echo $this->Html->link($consulta['Clinica']['nome'],
            array('controller' => 'clinicas', 'action' => 'view', $consulta['Clinica']['id'])); ?>
          </td>

          <td>
            <div data-ls-module="dropdown" class="ls-dropdown">
              <a class="ls-btn" href="#">Opções</a>

              <ul class="ls-dropdown-nav">
                <li>
                  <?php echo $this->Html->link('Retorno Médico',
                  array('controller' => 'consultas', 'action' => 'index_retorno', $consulta['Paciente']['id'], $consulta['Consulta']['id'])); ?>
                </li>
                <li><?php echo $this->Html->link('Visualizar', array ('controller' => 'consultas', 'action' => 'view', $consulta['Consulta']['id'])); ?></li>
                <li>
                  <?php echo $this->Html->link('Editar', array ('action' => 'edit', $consulta['Consulta']['id'])); ?>
                </li>
                <li>
                  <?php echo $this->Html->link('Excluir',
                  array ('action' => 'delete', $consulta['Consulta']['id']),
                  array('confirm' => 'Tem certeza que deseja excluir?',  'class'=> 'ls-color-danger ls-divider'));
                  ?>
                </li>
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
