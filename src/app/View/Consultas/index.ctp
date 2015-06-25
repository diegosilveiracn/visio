<h3>Consulta de Consultas</h3>

<p><?php echo $this->Html->link('Novo', array('controller' => 'consultas', 'action' => 'add')); ?></p>

<table>
    <tr>
		<th></th>
        <th><?php echo $this->Paginator->sort('created', 'Data'); ?></th>
        <th><?php echo $this->Paginator->sort('tipo_consulta', 'Tipo da Consulta'); ?></th>
        <th><?php echo $this->Paginator->sort('Paciente.nome', 'Paciente'); ?></th>
        <th><?php echo $this->Paginator->sort('Oftalmologista.nome', 'Oftalmologista'); ?></th>
        <th><?php echo $this->Paginator->sort('Clinica.nome', 'Clínica'); ?></th>
        <th></th>
        <th></th>
    </tr>

    <?php foreach ($consultas as $consulta): ?>
        <tr>
            <td>
				<?php echo $this->Html->link('Abrir', array ('controller' => 'consultas', 'action' => 'view', $consulta['Consulta']['id'])); ?>
            </td>

			<td>
				<?php echo date('d/m/Y',strtotime($consulta['Consulta']['created']));?>
			</td>

			<td>
				<?php echo $consulta['Consulta']['tipo_consulta'] == 1 ?'Normal':'Retorno';?>
			</td>

	        <td>
                <?php echo $this->Html->link($consulta['Paciente']['nome'],
					 array('controller' => 'pacientes', 'action' => 'index', $consulta['Paciente']['proprietario_id'], $consulta['Paciente']['id'])); ?>
	        </td>

			<td>
				<?php echo $this->Html->link($consulta['Oftalmologista']['nome'],
					 array('controller' => 'oftalmologistas', 'action' => 'index', $consulta['Oftalmologista']['id'])); ?>
			</td>

			<td>
                <?php echo $this->Html->link($consulta['Clinica']['nome'],
					 array('controller' => 'clinicas', 'action' => 'index', $consulta['Clinica']['id'])); ?>
			</td>

	    	<td>
				<?php echo $this->Html->link('Alterar', array ('action' => 'edit', $consulta['Consulta']['id'])); ?>
			</td>

			<td>
				<?php echo $this->Html->link('Excluir', 
					array ('action' => 'delete', $consulta['Consulta']['id']),
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
