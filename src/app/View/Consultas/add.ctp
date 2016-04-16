<h1 class="ls-title-intro ls-ico-plus">Cadastro de Consulta</h1>

<?php

echo $this->Form->create('Consulta', array('action' => 'add', 'class' => 'ls-form row', 'type' => 'file'));

echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('created', array('div' => 'ls-label col-md-3', 'label' => 'Data da Consulta','type' => 'date','dateFormat' => 'DMY'));
echo $this->Form->input('paciente_id', array('div' => 'ls-label col-md-3', 'options' => $pacientes, 'empty' => ''));
echo $this->Form->input('clinica_id', array('div' => 'ls-label col-md-3', 'label' => 'Clínica', 'options' => $clinicas, 'empty' => ''));
echo $this->Form->input('historico', array('div' => 'ls-label col-md-3', 'label' => 'Histórico'));
?>

<div data-ls-module="collapse" data-target="#acordeon0" class="ls-collapse ">
  <a href="#" class="ls-collapse-header">
    <h2 class="ls-collapse-title">Olho Direito</h2>
  </a>
  <div class="ls-collapse-body" id="acordeon0">
    <?php
    echo $this->Form->input('reflexos_direto_d', array('div' => 'ls-label col-md-3', 'label' => 'Reflexos Direto', 'options' => array('+' => 'Positivo','-' => 'Negativo')));
    echo $this->Form->input('reflexos_consensual_d', array('div' => 'ls-label col-md-3', 'label' => 'Reflexos Consensual', 'options' => array('+' => 'Positivo','-' => 'Negativo')));
    echo $this->Form->input('reflexos_ameaca_d', array('div' => 'ls-label col-md-3', 'label' => 'Reflexos de Ameaça', 'options' => array('+' => 'Positivo','-' => 'Negativo')));
    echo $this->Form->input('schirmer_d', array('div' => 'ls-label col-md-3', 'label' => 'Shirmer (mm/min)'));
    echo $this->Form->input('aplan_d', array('div' => 'ls-label col-md-3', 'label' => 'Aplan (mmHg)'));
    echo $this->Form->input('palpebras_d', array('div' => 'ls-label col-md-3', 'label' => 'Pálpebras'));
    echo $this->Form->input('aparelho_lacrimal_d', array('div' => 'ls-label col-md-3', 'label' => 'Aparelho Lacrimal'));
    echo $this->Form->input('conjuntiva_d', array('div' => 'ls-label col-md-3', 'label' => 'Conjuntiva'));
    echo $this->Form->input('cornea_d', array('div' => 'ls-label col-md-3', 'label' => 'Córnea'));
    echo $this->Form->input('fluoresceina_d', array('div' => 'ls-label col-md-3', 'label' => 'Fluoresceína', 'options' => array('-' => 'Negativo', '+' => 'Positivo')));
    echo $this->Form->input('jones_d', array('div' => 'ls-label col-md-3', 'label' => 'Jones', 'options' => array('+' => 'Positivo','-' => 'Negativo')));
    echo $this->Form->input('camara_ant_angu_drenagem_d', array('div' => 'ls-label col-md-3', 'label' => 'Câmera Anterior e Ângulo de drenagem'));
    echo $this->Form->input('pupila_iris_d', array('div' => 'ls-label col-md-3', 'label' => 'Pupila e Íris'));
    echo $this->Form->input('lente_d', array('div' => 'ls-label col-md-3', 'label' => 'Lente'));
    echo $this->Form->input('fundo_vitreo_d', array('div' => 'ls-label col-md-3', 'label' => 'Fundo e Vítreo'));
    echo $this->Form->input('upload_d', array('type'=>'file', 'div' => 'ls-label col-md-3', 'label' => 'Imagem do olho'));
    ?>
  </div>
</div>

<div data-ls-module="collapse" data-target="#acordeon1" class="ls-collapse ">
  <a href="#" class="ls-collapse-header">
    <h2 class="ls-collapse-title">Olho Esquerdo</h2>
  </a>

  <div class="ls-collapse-body" id="acordeon1">
    <?php
    echo $this->Form->input('reflexos_direto_e', array('div' => 'ls-label col-md-3', 'label' => 'Reflexos Direto', 'options' => array('+' => 'Positivo','-' => 'Negativo')));
    echo $this->Form->input('reflexos_consensual_e', array('div' => 'ls-label col-md-3', 'label' => 'Reflexos Consensual', 'options' => array('+' => 'Positivo','-' => 'Negativo')));
    echo $this->Form->input('reflexos_ameaca_e', array('div' => 'ls-label col-md-3', 'label' => 'Reflexos de Ameaça', 'options' => array('+' => 'Positivo','-' => 'Negativo')));
    echo $this->Form->input('schirmer_e', array('div' => 'ls-label col-md-3', 'label' => 'Shirmer (mm/min)'));
    echo $this->Form->input('aplan_e', array('div' => 'ls-label col-md-3', 'label' => 'Aplan (mmHg)'));
    echo $this->Form->input('palpebras_e', array('div' => 'ls-label col-md-3', 'label' => 'Pálpebras'));
    echo $this->Form->input('aparelho_lacrimal_e', array('div' => 'ls-label col-md-3', 'label' => 'Aparelho Lacrimal'));
    echo $this->Form->input('conjuntiva_e', array('div' => 'ls-label col-md-3', 'label' => 'Conjuntiva'));
    echo $this->Form->input('cornea_e', array('div' => 'ls-label col-md-3', 'label' => 'Córnea'));
    echo $this->Form->input('fluoresceina_e', array('div' => 'ls-label col-md-3', 'label' => 'Fluoresceína', 'options' => array('-' => 'Negativo', '+' => 'Positivo')));
    echo $this->Form->input('jones_e', array('div' => 'ls-label col-md-3', 'label' => 'Jones', 'options' => array('+' => 'Positivo','-' => 'Negativo')));
    echo $this->Form->input('camara_ant_angu_drenagem_e', array('div' => 'ls-label col-md-3', 'label' => 'Câmera Anterior e Ângulo de drenagem'));
    echo $this->Form->input('pupila_iris_e', array('div' => 'ls-label col-md-3', 'label' => 'Pupila e Íris'));
    echo $this->Form->input('lente_e', array('div' => 'ls-label col-md-3', 'label' => 'Lente'));
    echo $this->Form->input('fundo_vitreo_e', array('div' => 'ls-label col-md-3', 'label' => 'Fundo e Vítreo'));
    echo $this->Form->input('upload_e', array('type'=>'file','div' => 'ls-label col-md-3','label' => 'Imagem do olho'));
    ?>
  </div>
</div>

<?php
echo $this->Form->input('diagnostico', array('div' => 'ls-label col-md-3', 'label' => 'Diagnóstico'));
echo $this->Form->input('tratamento', array('div' => 'ls-label col-md-3'));

echo $this->Form->end(array('div' => 'ls-actions-btn', 'label' => 'Salvar', 'class' => 'ls-btn'));
?>
