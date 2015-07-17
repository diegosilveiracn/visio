<h3>Consulta de Serviços</h3>

<p><?php echo $this->Html->link('Novo', array ('controller' => 'servicos', 'action' => 'add', $consulta_id)); ?></p>

<table>
    <tr>
		    <th><?php echo $this->Paginator->sort('Servico.descricao', 'Descrição'); ?></th>
        <th>Valor</th>
        <th></th>
        <th></th>
    </tr>

    <?php
      $total = 0;

      foreach ($servicos as $servico):

      $total += $servico['Servico']['valor'];
    ?>

        <tr>
	    		<td>
					  <?php echo $servico['Servico']['descricao'];?>
	    		</td>

				<td>
					<?php echo $servico['Servico']['valor'];?>
				</td>

	    	<td>
					<?php echo $this->Html->link('Alterar', array ('action' => 'edit', $servico['Servico']['id'])); ?>
				</td>

				<td>
					<?php echo $this->Html->link('Excluir',
						array ('action' => 'delete', $servico['Servico']['id'], $servico['Servico']['consulta_id']),
						array('confirm' => 'Tem certeza que deseja excluir?'));
					?>
	    		</td>
        </tr>
    <?php endforeach; ?>

    <tr>
      <td><b>Total</b></td>
      <td><?php echo $total;?></td>
    </tr>

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
