<h1 class="ls-title-intro ls-ico-info">Visualização de Proprietário</h1>

<h2>Nome</h2>
<p><?php echo $proprietario['Proprietario']['nome'] != null ? $proprietario['Proprietario']['nome'] : "Não informado"; ?></p>

<h2>Endereço</h2>
<p><?php echo $proprietario['Proprietario']['endereco'] != null ? $proprietario['Proprietario']['endereco']: "Não informado"; ?></p>

<h2>Número</h2>
<p><?php echo $proprietario['Proprietario']['numero'] != null ? $proprietario['Proprietario']['numero'] : "Não informado"; ?></p>

<h2>Complemento</h2>
<p><?php echo $proprietario['Proprietario']['complemento'] != null ? $proprietario['Proprietario']['complemento'] : "Não informado"; ?></p>

<h2>Bairro</h2>
<p><?php echo $proprietario['Proprietario']['bairro'] != null ? $proprietario['Proprietario']['bairro'] : "Não informado"; ?></p>

<h2>Cidade</h2>
<p><?php echo $proprietario['Proprietario']['cidade'] != null ? $proprietario['Proprietario']['cidade']: "Não informado" ; ?></p>

<h2>UF</h2>
<p><?php echo $proprietario['Proprietario']['uf'] != null ? $proprietario['Proprietario']['uf'] : "Não informado" ; ?> </p>

<h2>CEP</h2>
<p><?php echo $proprietario['Proprietario']['cep'] != null ? $proprietario['Proprietario']['cep'] : "Não informado"; ?></p>

<h2>E-mail</h2>
<p><?php echo $proprietario['Proprietario']['email'] != null ? $proprietario['Proprietario']['email'] : "Não informado"; ?></p>

<h2>Telefone</h2>
<p><?php echo $proprietario['Proprietario']['telefone'] != null ? $proprietario['Proprietario']['telefone'] : "Não informado"; ?></p>

<h2>Pacientes</h2>
<p>
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
</p>
