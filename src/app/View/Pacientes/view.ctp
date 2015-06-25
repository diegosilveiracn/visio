<h3>Visualização de Paciente</h3>

<h1>Nome</h1>
<p><?php echo $paciente['Paciente']['nome']; ?></p>

<h1>Data de Nascimento</h1>
<p><?php echo date('d/m/Y',strtotime($paciente['Paciente']['data_nascimento'])); ?></p>

<h1>Espécie</h1>
<p><?php echo $paciente['Paciente']['especie']; ?></p>

<h1>Raça</h1>
<p><?php echo $paciente['Paciente']['raca']; ?></p>

<h1>Sexo</h1>
<p><?php echo $paciente['Paciente']['sexo'] == 'M'?'Macho':'Fêmea'; ?></p>

<h1>Proprietário</h1>
<p><?php echo $paciente['Proprietario']['nome']; ?></p>
