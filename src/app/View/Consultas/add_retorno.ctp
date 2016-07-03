<h1 class="ls-title-intro ls-ico-plus">Cadastro de Retorno</h1>

<?php echo $this->Form->create('Consulta', array('action' => 'add_retorno', 'class' => 'ls-form ls-form-horizontal row', 'type' => 'file'));?>

<fieldset>
  <?php
  echo $this->Form->input('id', array('type' => 'hidden'));
  echo $this->Form->input('paciente_id', array('value' => $paciente_id, 'type' => 'hidden'));
  echo $this->Form->input('consulta_id', array('value' => $consulta_id, 'type' => 'hidden'));
  echo $this->Form->input('created', array('div' => 'ls-label col-md-3', 'label' => 'Data da Consulta','type' => 'date','dateFormat' => 'DMY')); ?>

  <label class="ls-label col-md-3">
    <b class="ls-label-text">Paciente</b>
    <?php echo $this->Form->input('clinica_id', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => $clinicas, 'empty' => '')); ?>
  </label>

  <?php echo $this->Form->input('historico', array('div' => 'ls-label col-md-3', 'label' => 'Histórico'));?>
</fieldset>

<fieldset>
    <h4 class="ls-title-4">Olho Direito</h4>
    <hr/>

    <label class="ls-label col-md-3">
      <b class="ls-label-text">Reflexos Direto</b>
      <?php echo $this->Form->input('reflexos_direto_d', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('+' => 'Positivo','-' => 'Negativo'))); ?>
    </label>

    <label class="ls-label col-md-3">
      <b class="ls-label-text">Reflexos Consensual</b>
      <?php echo $this->Form->input('reflexos_consensual_d', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('+' => 'Positivo','-' => 'Negativo'))); ?>
    </label>

    <label class="ls-label col-md-3">
      <b class="ls-label-text">Reflexos de Ameaça</b>
      <?php echo $this->Form->input('reflexos_ameaca_d', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('+' => 'Positivo','-' => 'Negativo'))); ?>
    </label>

    <?php
    echo $this->Form->input('schirmer_d', array('div' => 'ls-label col-md-3', 'label' => 'Shirmer (mm/min)'));
    echo $this->Form->input('aplan_d', array('div' => 'ls-label col-md-3', 'label' => 'Aplan (mmHg)'));
    echo $this->Form->input('palpebras_d', array('div' => 'ls-label col-md-3', 'label' => 'Pálpebras'));
    echo $this->Form->input('aparelho_lacrimal_d', array('div' => 'ls-label col-md-3', 'label' => 'Aparelho Lacrimal'));
    echo $this->Form->input('conjuntiva_d', array('div' => 'ls-label col-md-3', 'label' => 'Conjuntiva'));
    echo $this->Form->input('cornea_d', array('div' => 'ls-label col-md-3', 'label' => 'Córnea'));?>

    <label class="ls-label col-md-3">
      <b class="ls-label-text">Fluoresceína</b>
      <?php echo $this->Form->input('fluoresceina_d', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('-' => 'Negativo', '+' => 'Positivo'))); ?>
    </label>

    <label class="ls-label col-md-3">
      <b class="ls-label-text">Jones</b>
      <?php echo $this->Form->input('jones_d', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('+' => 'Positivo','-' => 'Negativo'))); ?>
    </label>

    <?php
    echo $this->Form->input('camara_ant_angu_drenagem_d', array('div' => 'ls-label col-md-3', 'label' => 'Câmera Anterior e Ângulo de drenagem'));
    echo $this->Form->input('pupila_iris_d', array('div' => 'ls-label col-md-3', 'label' => 'Pupila e Íris'));
    echo $this->Form->input('lente_d', array('div' => 'ls-label col-md-3', 'label' => 'Lente'));
    echo $this->Form->input('fundo_vitreo_d', array('div' => 'ls-label col-md-3', 'label' => 'Fundo e Vítreo'));
    echo $this->Form->input('upload_d', array('type'=>'file','div' => 'ls-label col-md-3', 'label' => 'Imagem do olho'));
    ?>
</fieldset>

<fieldset>
  <h4 class="ls-title-4">Olho Esquerdo</h4>
  <hr/>
    <label class="ls-label col-md-3">
      <b class="ls-label-text">Reflexos Direto</b>
      <?php echo $this->Form->input('reflexos_direto_e', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('+' => 'Positivo','-' => 'Negativo'))); ?>
    </label>

    <label class="ls-label col-md-3">
      <b class="ls-label-text">Reflexos Consensual</b>
      <?php echo $this->Form->input('reflexos_consensual_e', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('+' => 'Positivo','-' => 'Negativo'))); ?>
    </label>

    <label class="ls-label col-md-3">
        <b class="ls-label-text">Reflexos de Ameaça</b>
        <?php echo $this->Form->input('reflexos_ameaca_e', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('+' => 'Positivo','-' => 'Negativo'))); ?>
    </label>

    <?php
    echo $this->Form->input('schirmer_e', array('div' => 'ls-label col-md-3', 'label' => 'Shirmer (mm/min)'));
    echo $this->Form->input('aplan_e', array('div' => 'ls-label col-md-3', 'label' => 'Aplan (mmHg)'));
    echo $this->Form->input('palpebras_e', array('div' => 'ls-label col-md-3', 'label' => 'Pálpebras'));
    echo $this->Form->input('aparelho_lacrimal_e', array('div' => 'ls-label col-md-3', 'label' => 'Aparelho Lacrimal'));
    echo $this->Form->input('conjuntiva_e', array('div' => 'ls-label col-md-3', 'label' => 'Conjuntiva'));
    echo $this->Form->input('cornea_e', array('div' => 'ls-label col-md-3', 'label' => 'Córnea')); ?>

    <label class="ls-label col-md-3">
      <b class="ls-label-text">Fluoresceína</b>
      <?php echo $this->Form->input('fluoresceina_e', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('-' => 'Negativo', '+' => 'Positivo'))); ?>
    </label>

    <label class="ls-label col-md-3">
      <b class="ls-label-text">Jones</b>
      <?php echo $this->Form->input('jones_e', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('+' => 'Positivo','-' => 'Negativo'))); ?>
    </label>

    <?php
    echo $this->Form->input('camara_ant_angu_drenagem_e', array('div' => 'ls-label col-md-3', 'label' => 'Câmera Anterior e Ângulo de drenagem'));
    echo $this->Form->input('pupila_iris_e', array('div' => 'ls-label col-md-3', 'label' => 'Pupila e Íris'));
    echo $this->Form->input('lente_e', array('div' => 'ls-label col-md-3', 'label' => 'Lente'));
    echo $this->Form->input('fundo_vitreo_e', array('div' => 'ls-label col-md-3', 'label' => 'Fundo e Vítreo'));
    echo $this->Form->input('upload_e', array('div' => 'ls-label col-md-3', 'type'=>'file', 'label' => 'Imagem do olho'));
    ?>
</fieldset>

<fieldset>
  <hr/>
  <?php
  echo $this->Form->input('diagnostico', array('div' => 'ls-label col-md-3', 'label' => 'Diagnóstico'));
  echo $this->Form->input('tratamento', array('div' => 'ls-label col-md-3'));
  ?>
</fieldset>

<?php echo $this->Form->end(array('div' => 'ls-actions-btn', 'label' => 'Salvar', 'class' => 'ls-btn-primary')); ?>
