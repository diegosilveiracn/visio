<h3>Consulta de Oftalmologistas</h3>

<p><?php echo $this->Html->link('Novo', array ('controller' => 'oftalmologistas', 'action' => 'add')); ?></p>

<table>
    <tr>
		<th></th>
        <th><?php echo $this->Paginator->sort('nome', 'Nome'); ?></th>
        <th>E-mail</th>
        <th></th>
        <th></th>
    </tr>

    <?php foreach ($oftalmologistas as $oftalmologista): ?>
        <tr>
				<td>
					<?php echo $this->Html->link('Abrir', array ('controller' => 'oftalmologistas', 'action' => 'view', $oftalmologista['Oftalmologista']['id'])); ?>
				</td>

				<td>
					<?php echo $oftalmologista['Oftalmologista']['nome']?>
				</td>

	    		<td><?php echo $oftalmologista['Oftalmologista']['email']?></td>

	    		<td>
					<?php echo $this->Html->link('Alterar', array ('action' => 'edit', $oftalmologista['Oftalmologista']['id'])); ?>              
				</td>
	
				<td>
	        		<?php echo $this->Html->link('Excluir', 
						array ('action' => 'delete', $oftalmologista['Oftalmologista']['id']),
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
