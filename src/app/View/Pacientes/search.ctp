<h1 class="ls-title-intro ls-ico-search">Busca de Pacientes</h1>

<?php echo $this->Form->create('Paciente', array('action' => 'search', 'class' => 'ls-form row')); ?>
<fieldset>

<?php echo $this->Form->input('parte_nome', array('div' => 'ls-label col-md-3', 'label' => 'Nome')); ?>

<div class="ls-actions-btn">
  <?php echo $this->Form->submit('Buscar', array('div' => false, 'class' => 'ls-btn')); ?>
  <?php echo $this->Html->link('Voltar',	array ('controller' => 'pacientes', 'action' => 'index', $proprietario_id), array('class' => 'ls-btn')); ?>
</div>

</fieldset>

<table class="ls-table">
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
        <td>
          <?php echo $this->Html->link($paciente['Paciente']['nome'],
          array('controller' => 'pacientes', 'action' => 'view', $paciente['Paciente']['id'])); ?>
        </td>

        <td><?php echo $paciente['Paciente']['especie']?></td>

        <td>
          <?php echo $this->Html->link($paciente['Proprietario']['nome'],
          array('controller' => 'proprietarios', 'action' => 'view', $paciente['Proprietario']['id'])); ?>
        </td>

        <td>
          <?php echo $this->Html->link('Selecionar',	array ('controller' => 'pacientes', 'action' => 'index', $paciente['Proprietario']['id'], $paciente['Paciente']['id']), array('class' => 'ls-btn')); ?>
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
