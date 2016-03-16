<h3>Cadastro de Retorno</h3>

<?php

echo $this->Form->create('Consulta', array('action' => 'add_retorno', 'novalidate' => 'true', 'type' => 'file'));

echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('paciente_id', array('value' => $paciente_id, 'type' => 'hidden'));
echo $this->Form->input('consulta_id', array('value' => $consulta_id, 'type' => 'hidden'));
echo $this->Form->input('created', array('label' => 'Data da Consulta','type' => 'date','dateFormat' => 'DMY'));
echo $this->Form->input('clinica_id', array('label' => 'Clínica', 'options' => $clinicas, 'empty' => ''));
echo $this->Form->input('historico', array('label' => 'Histórico'));
?>

<div id="direita">

<h3>Olho Direito</h3>
<hr/>

<?php

echo $this->Form->input('reflexos_direto_d', array('label' => 'Reflexos Direto', 'options' => array('+' => 'Positivo','-' => 'Negativo')));
echo $this->Form->input('reflexos_consensual_d', array('label' => 'Reflexos Consensual', 'options' => array('+' => 'Positivo','-' => 'Negativo')));
echo $this->Form->input('reflexos_ameaca_d', array('label' => 'Reflexos de Ameaça', 'options' => array('+' => 'Positivo','-' => 'Negativo')));
echo $this->Form->input('schirmer_d', array('label' => 'Shirmer (mm/min)'));
echo $this->Form->input('aplan_d', array('label' => 'Aplan (mmHg)'));
echo $this->Form->input('palpebras_d', array('label' => 'Pálpebras'));
echo $this->Form->input('aparelho_lacrimal_d', array('label' => 'Aparelho Lacrimal'));
echo $this->Form->input('conjuntiva_d', array('label' => 'Conjuntiva'));
echo $this->Form->input('cornea_d', array('label' => 'Córnea'));
echo $this->Form->input('fluoresceina_d', array('label' => 'Fluoresceína', 'options' => array('-' => 'Negativo', '+' => 'Positivo')));
echo $this->Form->input('jones_d', array('label' => 'Jones', 'options' => array('+' => 'Positivo','-' => 'Negativo')));
echo $this->Form->input('camara_ant_angu_drenagem_d', array('label' => 'Câmera Anterior e Ângulo de drenagem'));
echo $this->Form->input('pupila_iris_d', array('label' => 'Pupila e Íris'));
echo $this->Form->input('lente_d', array('label' => 'Lente'));
echo $this->Form->input('fundo_vitreo_d', array('label' => 'Fundo e Vítreo'));
echo $this->Form->input('upload_d', array('type'=>'file', 'label' => 'Imagem do olho'));

?>

</div>

<div id="esquerda">

<h3>Olho Esquerdo</h3>
<hr/>

<?php

echo $this->Form->input('reflexos_direto_e', array('label' => 'Reflexos Direto', 'options' => array('+' => 'Positivo','-' => 'Negativo')));
echo $this->Form->input('reflexos_consensual_e', array('label' => 'Reflexos Consensual', 'options' => array('+' => 'Positivo','-' => 'Negativo')));
echo $this->Form->input('reflexos_ameaca_e', array('label' => 'Reflexos de Ameaça', 'options' => array('+' => 'Positivo','-' => 'Negativo')));
echo $this->Form->input('schirmer_e', array('label' => 'Shirmer (mm/min)'));
echo $this->Form->input('aplan_e', array('label' => 'Aplan (mmHg)'));
echo $this->Form->input('palpebras_e', array('label' => 'Pálpebras'));
echo $this->Form->input('aparelho_lacrimal_e', array('label' => 'Aparelho Lacrimal'));
echo $this->Form->input('conjuntiva_e', array('label' => 'Conjuntiva'));
echo $this->Form->input('cornea_e', array('label' => 'Córnea'));
echo $this->Form->input('fluoresceina_e', array('label' => 'Fluoresceína', 'options' => array('-' => 'Negativo', '+' => 'Positivo')));
echo $this->Form->input('jones_e', array('label' => 'Jones', 'options' => array('+' => 'Positivo','-' => 'Negativo')));
echo $this->Form->input('camara_ant_angu_drenagem_e', array('label' => 'Câmera Anterior e Ângulo de drenagem'));
echo $this->Form->input('pupila_iris_e', array('label' => 'Pupila e Íris'));
echo $this->Form->input('lente_e', array('label' => 'Lente'));
echo $this->Form->input('fundo_vitreo_e', array('label' => 'Fundo e Vítreo'));
echo $this->Form->input('upload_e', array('type'=>'file', 'label' => 'Imagem do olho'));

?>

</div>

<?php
  echo $this->Form->input('diagnostico', array('label' => 'Diagnóstico'));
  echo $this->Form->input('tratamento');

  echo $this->Form->end('Salvar');
?>
