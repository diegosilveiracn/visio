<h1 class="ls-title-intro ls-ico-info">Visualização de Proprietário</h1>

<table class="ls-table ls-no-hover ls-table-striped">

	<tr>
		<th>Nome</th>
		<td><?php echo $proprietario['Proprietario']['nome'] != null ? $proprietario['Proprietario']['nome'] : "Não informado"; ?></td>
	</tr>

	<tr>
		<th>Endereço</th>
		<td><?php echo $proprietario['Proprietario']['endereco'] != null ? $proprietario['Proprietario']['endereco']: "Não informado"; ?></td>
	</tr>

	<tr>
		<th>Número</th>
		<td><?php echo $proprietario['Proprietario']['numero'] != null ? $proprietario['Proprietario']['numero'] : "Não informado"; ?></td>
	</tr>

	<tr>
		<th>Complemento</th>
		<td><?php echo $proprietario['Proprietario']['complemento'] != null ? $proprietario['Proprietario']['complemento'] : "Não informado"; ?></td>
	</tr>

	<tr>
		<th>Bairro</th>
		<td><?php echo $proprietario['Proprietario']['bairro'] != null ? $proprietario['Proprietario']['bairro'] : "Não informado"; ?></td>
	</tr>

	<tr>
		<th>Cidade</th>
		<td><?php echo $proprietario['Proprietario']['cidade'] != null ? $proprietario['Proprietario']['cidade']: "Não informado" ; ?></td>
	</tr>

	<tr>
		<th>UF</th>
		<td><?php echo $proprietario['Proprietario']['uf'] != null ? $proprietario['Proprietario']['uf'] : "Não informado" ; ?> </td>
	</tr>

	<tr>
		<th>CEP</th>
		<td><?php echo $proprietario['Proprietario']['cep'] != null ? $proprietario['Proprietario']['cep'] : "Não informado"; ?></td>
	</tr>

	<tr>
		<th>E-mail</th>
		<td><?php echo $proprietario['Proprietario']['email'] != null ? $proprietario['Proprietario']['email'] : "Não informado"; ?></td>
	</tr>

	<tr>
		<th>Telefone</th>
		<td><?php echo $proprietario['Proprietario']['telefone'] != null ? $proprietario['Proprietario']['telefone'] : "Não informado"; ?></td>
	</tr>

	<tr>
		<th>Pacientes</th>
		<td>
	<?php
	$i = 0;
	foreach ($proprietario['Paciente'] as $paciente):
		if($i == 0){
			echo $paciente['nome'];
		}else{
			echo ", ".$paciente['nome'];
		}
		$i++;
	endforeach;

	if ($i > 1){
		echo "Não possui pacientes";
	}
	?>
		</td>
	</tr>

</table>
