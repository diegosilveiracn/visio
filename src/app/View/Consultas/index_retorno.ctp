<h3>Retornos</h3>

<p><?php echo $this->Html->link('Novo', array('controller' => 'consultas', 'action' => 'add_retorno', $paciente_id, $consulta_id)); ?></p>

<table>
    <tr>
		<th></th>
        <th><?php echo $this->Paginator->sort('created', 'Data'); ?></th>
        <th><?php echo $this->Paginator->sort('Paciente.historico', 'Histórico'); ?></th>
        <th><?php echo $this->Paginator->sort('Paciente.diagostico', 'Diagnóstico'); ?></th>
        <th><?php echo $this->Paginator->sort('Paciente.tratamento', 'Tratamento'); ?></th>
        <th><?php echo $this->Paginator->sort('Oftalmologista.nome', 'Oftalmologista'); ?></th>
        <th><?php echo $this->Paginator->sort('Clinica.nome', 'Clínica'); ?></th>
        <th></th>
        <th></th>
    </tr>

    <?php foreach ($consultas as $consulta): ?>
    <tr>
      <td>
				    <?php echo $this->Html->link('Abrir', array ('controller' => 'consultas', 'action' => 'view_retorno', $consulta['Consulta']['id'])); ?>
      </td>

			<td>
				    <?php echo date('d/m/Y',strtotime($consulta['Consulta']['created']));?>
			</td>

	    <td>
            <?php echo $consulta['Consulta']['historico']; ?>
	    </td>

      <td>
            <?php echo $consulta['Consulta']['diagnostico']; ?>
	    </td>

			<td>
            <?php echo $consulta['Consulta']['tratamento']; ?>
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
				<?php echo $this->Html->link('Alterar', array ('action' => 'edit_retorno', $consulta['Consulta']['id'])); ?>
			</td>

			<td>
				<?php echo $this->Html->link('Excluir',
					array ('action' => 'delete_retorno', $consulta['Consulta']['id'], $consulta['Paciente']['id'], $consulta['Consulta']['consulta_id']),
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
