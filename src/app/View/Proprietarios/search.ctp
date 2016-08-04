<h1 class="ls-title-intro ls-ico-search">Busca de Proprietários</h1>

<?php echo $this->Form->create('Proprietario', array('action' => 'search', 'class' => 'ls-form row')); ?>
<fieldset>
<?php
echo $this->Form->input('parte_nome', array('div' => 'ls-label col-md-3', 'label' => 'Nome'));
?>
</fieldset>
<?php echo $this->Form->end(array('div' => 'ls-actions-btn', 'label' => 'Buscar', 'class' => 'ls-btn-primary')); ?>

<table class="ls-table">
  <thead>
    <tr>
      <th><?php echo $this->Paginator->sort('nome', 'Nome'); ?></th>
      <th></th>
    </tr>
  </thead>

  <tbody>
    <?php foreach ($proprietarios as $proprietario): ?>
      <tr>
        <td>
          <?php echo $this->Html->link($proprietario['Proprietario']['nome'],
          array('controller' => 'proprietarios', 'action' => 'view', $proprietario['Proprietario']['id'])); ?>
        </td>

        <th>
          <?php echo $this->Html->link('Selecionar',	array ('controller' => 'proprietarios', 'action' => 'index', $proprietario['Proprietario']['id']), array('class' => 'ls-btn')); ?>
        </th>
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
