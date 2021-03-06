<h1 class="ls-title-intro ls-ico-info">Visualização de Paciente</h1>

<table  class="ls-table ls-no-hover ls-table-striped">
<tr>
 <th>Nome</th>
 <td><?php echo $paciente['Paciente']['nome'] != null? $paciente['Paciente']['nome']: "Não informado"; ?></td>
</tr>
<tr>
 <th>Data de Nascimento</th>
 <td><?php echo $paciente['Paciente']['data_nascimento'] != null? date('d/m/Y',strtotime($paciente['Paciente']['data_nascimento'])) : "Não informado"; ?></td>
</tr>
<tr>
 <th>Espécie</th>
 <td><?php echo $paciente['Paciente']['especie'] != null ? $paciente['Paciente']['especie']: "Não informado"; ?></td>
</tr>
<tr>
 <th>Raça</th>
 <td><?php echo $paciente['Paciente']['raca'] != null ? $paciente['Paciente']['raca']: "Não informado"; ?></td>
</tr>
<tr>
 <th>Sexo</th>
 <td><?php echo $paciente['Paciente']['sexo'] == 'M'?'Macho':'Fêmea'; ?></td>
</tr>
<tr>
 <th>Proprietário</th>
 <td><?php echo $paciente['Proprietario']['nome'] != null ? $paciente['Proprietario']['nome'] : "Não informado" ; ?></td>
</tr>
</table>

<div class="ls-actions-btn">
    <?php echo $this->Html->link('Editar', array ('controller' => 'pacientes', 'action' => 'edit', $paciente['Paciente']['id']), array('class' => 'ls-btn')); ?>
    <?php echo $this->Html->link('Excluir', array('action' => 'delete', $paciente['Paciente']['id'], $paciente['Proprietario']['id']), array('confirm' => 'Tem certeza que deseja excluir?', 'class' => 'ls-btn-danger')); ?>
    <?php echo $this->Html->link('Voltar',	array ('controller' => 'pacientes', 'action' => 'index', $paciente['Proprietario']['id']), array('class' => 'ls-btn')); ?>
</div>
