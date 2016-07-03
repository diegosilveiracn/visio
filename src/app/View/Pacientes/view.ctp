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
