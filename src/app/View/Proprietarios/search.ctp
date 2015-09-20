<h3>Busca de Proprietários</h3>

<?php

echo $this->Form->create('Proprietario');

echo $this->Form->input('parte_nome', array('label' => 'Nome'));

echo $this->Form->end('Buscar');

?>

<table>
    <tr>
        <th><?php echo $this->Paginator->sort('nome', 'Nome'); ?></th>
    </tr>

    <?php foreach ($proprietarios as $proprietario): ?>
        <tr>
			       <td>
				           <?php echo $this->Html->link($proprietario['Proprietario']['nome'],
				               array('controller' => 'proprietarios', 'action' => 'index', $proprietario['Proprietario']['id'])); ?>
			      </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
    echo "<div class='paging'>";

        // the 'first' page button
        echo $this->Paginator->first("Início");

        // 'prev' page button,
        // we can check using the paginator hasPrev() method if there's a previous page
        // save with the 'next' page button
        if($this->Paginator->hasPrev()){
            echo $this->Paginator->prev("Anterior");
        }

        // the 'number' page buttons
        echo $this->Paginator->numbers(array('modulus' => 2));

        // for the 'next' button
        if($this->Paginator->hasNext()){
            echo $this->Paginator->next("Próximo");
        }

        // the 'last' page button
        echo $this->Paginator->last("Fim");

    echo "</div>";
?>
