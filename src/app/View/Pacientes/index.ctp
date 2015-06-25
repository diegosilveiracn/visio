<h3>Consulta de Pacientes</h3>

<p><?php echo $this->Html->link('Novo',	array ('controller' => 'pacientes', 'action' => 'add',$proprietario_id)); ?></p>

<table>
    <tr>
		<th></th>
        <th><?php echo $this->Paginator->sort('nome', 'Nome'); ?></th>
        <th>Espécie</th>
	    <th><?php echo $this->Paginator->sort('Proprietario.nome', 'Proprietário'); ?></th>
		<th></th>
        <th></th>
        <th></th>
    </tr>

    <?php foreach ($pacientes as $paciente): ?>
        <tr>
            <td>
				<?php echo $this->Html->link('Abrir', array ('controller' => 'pacientes', 'action' => 'view', $paciente['Paciente']['id'])); ?>
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
				<?php echo $this->Html->link('Alterar', array ('action' => 'edit', $paciente['Paciente']['id'])); ?>
			</td>
	
			<td>
				<?php echo $this->Html->link('Excluir', 
						array('action' => 'delete', $paciente['Paciente']['id']),
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
