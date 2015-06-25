<h3>Visualização de Proprietário</h3>

<h1>Nome</h1>
<p><?php echo $proprietario['Proprietario']['nome']; ?></p>

<h1>Endereço</h1>
<p><?php echo $proprietario['Proprietario']['endereco']; ?></p>

<h1>Número</h1>
<p><?php echo $proprietario['Proprietario']['numero']; ?></p>

<h1>Complemento</h1>
<p><?php echo $proprietario['Proprietario']['complemento']; ?></p>

<h1>Bairro</h1>
<p><?php echo $proprietario['Proprietario']['bairro']; ?></p>

<h1>Cidade</h1>
<p><?php echo $proprietario['Proprietario']['cidade']; ?></p>

<h1>UF</h1>
<p><?php echo $proprietario['Proprietario']['uf']; ?> </p>

<h1>CEP</h1>
<p><?php echo $proprietario['Proprietario']['cep']; ?></p>

<h1>E-mail</h1>
<p><?php echo $proprietario['Proprietario']['email']; ?></p>

<h1>Telefone</h1>
<p><?php echo $proprietario['Proprietario']['telefone']; ?></p>

<h1>Pacientes</h1>
<p> 
	<?php 
	$i = 1;
	foreach ($proprietario['Paciente'] as $paciente):
		if($i == 1){
			echo $paciente['nome'];
		}else{
			echo ", ".$paciente['nome'];
		}
	endforeach;
	?>
</p>
