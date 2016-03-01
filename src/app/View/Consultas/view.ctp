<h3>Visualização de Consulta</h3>

<h1>Data</h1>
<p><?php echo date('d/m/Y',strtotime($consulta['Consulta']['created'])); ?></p>

<h1>Paciente</h1>
<p><?php echo $consulta['Paciente']['nome']; ?></p>

<h1>Oftalmologista</h1>
<p><?php echo $consulta['Oftalmologista']['nome']; ?></p>

<h1>Clínica</h1>
<p><?php echo $consulta['Clinica']['nome']; ?></p>

<h1>Histórico</h1>
<p><?php echo $consulta['Consulta']['historico']; ?></p>

<h1>Diagnóstico</h1>
<p><?php echo $consulta['Consulta']['diagnostico']; ?></p>

<h1>Tratamento</h1>
<p><?php echo $consulta['Consulta']['tratamento']; ?></p>

<table>
   <tr>
     <th>Descrição</th>
     <th>Olho Esquerdo</th>
     <th>Olho Direito</th>
   </tr>

   <tr>
     <td>Reflexos Direto</td>
     <td><?php echo $consulta['Consulta']['reflexos_direto_e'] == '+' ?'Positivo': 'Negativo'; ?></td>
     <td><?php echo $consulta['Consulta']['reflexos_direto_d'] == '+' ?'Positivo': 'Negativo'; ?></td>
   </tr>

   <tr>
     <td>Reflexos Consensual</td>
     <td><?php echo $consulta['Consulta']['reflexos_consensual_e'] == '+' ?'Positivo': 'Negativo'; ?></td>
     <td><?php echo $consulta['Consulta']['reflexos_consensual_d'] == '+' ?'Positivo': 'Negativo'; ?></td>
   </tr>

   <tr>
     <td>Reflexos de Ameaça</td>
     <td><?php echo $consulta['Consulta']['reflexos_ameaca_e'] == '+' ?'Positivo': 'Negativo'; ?></td>
     <td><?php echo $consulta['Consulta']['reflexos_ameaca_d'] == '+' ?'Positivo': 'Negativo'; ?></td>
   </tr>

   <tr>
     <td>Shirmer (mm/min)</td>
     <td><?php echo $consulta['Consulta']['schirmer_e']; ?></td>
     <td><?php echo $consulta['Consulta']['schirmer_d']; ?></td>
   </tr>

   <tr>
     <td>Aplan (mmHg)</td>
     <td><?php echo $consulta['Consulta']['aplan_e']; ?></td>
     <td><?php echo $consulta['Consulta']['aplan_d']; ?></td>
   </tr>

   <tr>
     <td>Pálpebras</td>
     <td><?php echo $consulta['Consulta']['palpebras_e']; ?></td>
     <td><?php echo $consulta['Consulta']['palpebras_d']; ?></td>
   </tr>

   <tr>
     <td>Aparelho Lacrimal</td>
     <td><?php echo $consulta['Consulta']['aparelho_lacrimal_e']; ?></td>
     <td><?php echo $consulta['Consulta']['aparelho_lacrimal_d']; ?></td>
   </tr>

   <tr>
     <td>Conjuntiva</td>
     <td><?php echo $consulta['Consulta']['conjuntiva_e']; ?></td>
     <td><?php echo $consulta['Consulta']['conjuntiva_d']; ?></td>
   </tr>

   <tr>
     <td>Córnea</td>
     <td><?php echo $consulta['Consulta']['cornea_e']; ?></td>
     <td><?php echo $consulta['Consulta']['cornea_d']; ?></td>
   </tr>

   <tr>
     <td>Fluoresceína</td>
     <td><?php echo $consulta['Consulta']['fluoresceina_e'] == '+' ?'Positivo': 'Negativo'; ?></td>
     <td><?php echo $consulta['Consulta']['fluoresceina_d'] == '+' ?'Positivo': 'Negativo'; ?></td>
   </tr>

   <tr>
     <td>Jones</td>
     <td><?php echo $consulta['Consulta']['jones_e'] == '+' ?'Positivo': 'Negativo'; ?></td>
     <td><?php echo $consulta['Consulta']['jones_d'] == '+' ?'Positivo': 'Negativo'; ?></td>
   </tr>

   <tr>
     <td>Câmera Anterior e Ângulo de drenagem</td>
     <td><?php echo $consulta['Consulta']['camara_ant_angu_drenagem_e']; ?></td>
     <td><?php echo $consulta['Consulta']['camara_ant_angu_drenagem_d']; ?></td>
   </tr>

   <tr>
     <td>Pupila e Íris</td>
     <td><?php echo $consulta['Consulta']['pupila_iris_e']; ?></td>
     <td><?php echo $consulta['Consulta']['pupila_iris_d']; ?></td>
   </tr>

   <tr>
     <td>Lente</td>
     <td><?php echo $consulta['Consulta']['lente_e']; ?></td>
     <td><?php echo $consulta['Consulta']['lente_d']; ?></td>
   </tr>

   <tr>
     <td>Fundo e Vítreo</td>
     <td><?php echo $consulta['Consulta']['fundo_vitreo_e']; ?></td>
     <td><?php echo $consulta['Consulta']['fundo_vitreo_d']; ?></td>
   </tr>

   <tr>
     <td>Imagem</td>
     <td><?php echo $this->Html->image('/img/consultas/'.$consulta['Consulta']['imagem_e'], array('alt' => 'Imagem do olho esquerdo.', 'height' => 200)); ?></td>
     <td><?php echo $this->Html->image('/img/consultas/'.$consulta['Consulta']['imagem_d'], array('alt' => 'Imagem do olho direito.', 'height' => 200)); ?></td>
   </tr>
</table>
