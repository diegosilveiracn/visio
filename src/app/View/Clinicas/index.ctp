<h3>Clínicas</h3>

<p><?php echo $this->Html->link('Novo', array('controller' => 'clinicas', 'action' => 'add')); ?></p>

<table>
    <tr>
		<th></th>
        <th><?php echo $this->Paginator->sort('nome', 'Nome'); ?></th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th></th>
        <th></th>
    </tr>

    <?php foreach ($clinicas as $clinica): ?>
        <tr>
				<td>
					<?php echo $this->Html->link('Abrir', array('controller' => 'clinicas', 'action' => 'view', $clinica['Clinica']['id'])); ?>
				</td>

            	<td><?php echo $clinica['Clinica']['nome']?></td>


	    		<td><?php echo $clinica['Clinica']['email']?></td>

	    		<td><?php echo $clinica['Clinica']['telefone']?></td>

	    		<td>
					<?php echo $this->Html->link('Alterar', array('action' => 'edit', $clinica['Clinica']['id'])); ?>
				</td>

				<td>
					<?php echo $this->Html->link('Excluir',
						array('action' => 'delete', $clinica['Clinica']['id']),
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
