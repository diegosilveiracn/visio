<h1 class="ls-title-intro ls-ico-info">Visualização de Paciente</h1>

<h2>Nome</h2>
<p><?php echo $paciente['Paciente']['nome'] != null? $paciente['Paciente']['nome']: "Não informado"; ?></p>

<h2>Data de Nascimento</h2>
<p><?php echo $paciente['Paciente']['data_nascimento'] != null? date('d/m/Y',strtotime($paciente['Paciente']['data_nascimento'])) : "Não informado"; ?></p>

<h2>Espécie</h2>
<p><?php echo $paciente['Paciente']['especie'] != null ? $paciente['Paciente']['especie']: "Não informado"; ?></p>

<h2>Raça</h2>
<p><?php echo $paciente['Paciente']['raca'] != null ? $paciente['Paciente']['raca']: "Não informado"; ?></p>

<h2>Sexo</h2>
<p><?php echo $paciente['Paciente']['sexo'] == 'M'?'Macho':'Fêmea'; ?></p>

<h2>Proprietário</h2>
<p><?php echo $paciente['Proprietario']['nome'] != null ? $paciente['Proprietario']['nome'] : "Não informado" ; ?></p>
