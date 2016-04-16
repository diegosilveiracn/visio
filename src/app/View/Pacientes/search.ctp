<h1 class="ls-title-intro ls-ico-search">Busca de Pacientes</h1>

<?php

echo $this->Form->create('Paciente', array('action' => 'search', 'class' => 'ls-form row'));

echo $this->Form->input('parte_nome', array('div' => 'ls-label col-md-3', 'label' => 'Nome'));

echo $this->Form->end(array('div' => 'ls-actions-btn', 'label' => 'Buscar', 'class' => 'ls-btn'));

?>

<table class="ls-table ls-bg-header ls-no-hover">
  <thead>
    <tr>
      <th class="ls-data-descending"><?php echo $this->Paginator->sort('nome', 'Nome'); ?></th>
      <th>Espécie</th>
      <th class="ls-data-descending"><?php echo $this->Paginator->sort('Proprietario.nome', 'Proprietário'); ?></th>
    </tr>
  </thead>

  <tbody>
    <?php foreach ($pacientes as $paciente): ?>
      <tr>
        <td>
          <?php echo $this->Html->link($paciente['Paciente']['nome'],
          array('controller' => 'pacientes', 'action' => 'index', $paciente['Proprietario']['id'], $paciente['Paciente']['id'])); ?>
        </td>

        <td><?php echo $paciente['Paciente']['especie']?></td>

        <td>
          <?php echo $this->Html->link($paciente['Proprietario']['nome'],
          array('controller' => 'proprietarios', 'action' => 'index', $paciente['Proprietario']['id'])); ?>
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
