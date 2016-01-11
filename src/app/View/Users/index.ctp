<h3>Usuários</h3>

<p><?php echo $this->Html->link('Novo', array ('controller' => 'users', 'action' => 'add')); ?></p>

<table>
    <tr>
		<th></th>
		<th><?php echo $this->Paginator->sort('Oftalmologista.nome', 'Nome'); ?></th>
        <th>Login</th>
        <th>Regra de Acesso</th>
        <th></th>
        <th></th>
    </tr>

    <?php foreach ($users as $user): ?>
        <tr>
				<td>
					<?php echo $this->Html->link('Abrir', array ('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
				</td>

	    		<td>
					<?php echo $this->Html->link($user['Oftalmologista']['nome'], array('controller' => 'oftalmologistas', 'action' => 'index', $user['Oftalmologista']['id'])); ?>
	    		</td>

				<td>
					<?php echo $user['User']['username'];?>
				</td>

				<td>
					<?php echo $user['User']['role'] == 1 ?'Administrador':'Simples'; ?>
				</td>

	    		<td>
					<?php echo $this->Html->link('Alterar', array ('action' => 'edit', $user['User']['id'])); ?>
				</td>

				<td>
					<?php echo $this->Html->link('Excluir',
						array ('action' => 'delete', $user['User']['id']),
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
