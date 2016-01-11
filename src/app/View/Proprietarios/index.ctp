<h3>Proprietários</h3>

<p>
	<?php echo $this->Html->link('Novo', array ('controller' => 'proprietarios', 'action' => 'add')); ?> |
	<?php echo $this->Html->link('Buscar',	array ('controller' => 'proprietarios', 'action' => 'search')); ?>
</p>


<table>
    <tr>
		<th></th>
        <th><?php echo $this->Paginator->sort('nome', 'Nome'); ?></th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>

    <?php foreach ($proprietarios as $proprietario): ?>
        <tr>
            <td>
				<?php echo $this->Html->link('Abrir', array ('controller' => 'proprietarios', 'action' => 'view', $proprietario['Proprietario']['id'])); ?>
            </td>

			<td><?php echo $proprietario['Proprietario']['nome']?></td>

	    	<td><?php echo $proprietario['Proprietario']['email']?></td>

	    	<td><?php echo $proprietario['Proprietario']['telefone']?></td>

	    	<td>
				<?php echo $this->Html->link('Paciente', array('controller' => 'pacientes', 'action' => 'index', $proprietario['Proprietario']['id'])); ?>
            </td>

	    	<td>
				<?php echo $this->Html->link('Alterar', array ('action' => 'edit', $proprietario['Proprietario']['id'])); ?>
			</td>

			<td>
				<?php echo $this->Html->link('Excluir',
					array ('action' => 'delete', $proprietario['Proprietario']['id']),
					array('confirm' => 'Tem certeza que deseja excluir?'));
				?>
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
