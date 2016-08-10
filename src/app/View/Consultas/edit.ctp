<h1 class="ls-title-intro ls-ico-pencil">Alteração de Consulta</h1>

<?php echo $this->Form->create('Consulta', array('action' => 'edit', 'class' => 'ls-form ls-form-horizontal row', 'type' => 'file'));?>

<fieldset>
<?php
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('oftalmologista_id', array('type' => 'hidden'));
?>

<label class="ls-label col-md-3">
  <b class="ls-label-text">Data da Consulta</b>
  <?php echo $this->Form->input('data_consulta', array('class' => 'date datepicker', 'div' => false, 'label' => false)); ?>
</label>

<label class="ls-label col-md-3">
  <b class="ls-label-text">Paciente</b>
  <?php echo $this->Form->input('paciente_id', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => $pacientes)); ?>
</label>

<label class="ls-label col-md-3">
  <b class="ls-label-text">Clínica</b>
  <?php echo $this->Form->input('clinica_id', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => $clinicas)); ?>
</label>
</fieldset>

<fieldset>
  <label class="ls-label">
    <b class="ls-label-text">Histórico</b>
    <?php echo $this->Form->input('historico', array('class' => 'ls-textarea-resize-horizontal','div' => false, 'label' => false));?>
  </label>
</fieldset>

<hr>

<fieldset>
  <h4 class="ls-title-4">Olho Direito</h4>
  <br>
  <?php echo $this->Form->input('imagem_d', array('type' => 'hidden')); ?>

  <label class="ls-label col-md-3">
    <b class="ls-label-text">Reflexos Direto</b>
    <?php echo $this->Form->input('reflexos_direto_d', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('+' => 'Positivo','-' => 'Negativo'))); ?>
  </label>

  <label class="ls-label col-md-3">
    <b class="ls-label-text">Reflexos Consensual</b>
    <?php echo $this->Form->input('reflexos_consensual_d', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('+' => 'Positivo','-' => 'Negativo')));  ?>
  </label>

  <label class="ls-label col-md-3">
    <b class="ls-label-text">Reflexos de Ameaça</b>
    <?php echo $this->Form->input('reflexos_ameaca_d', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('+' => 'Positivo','-' => 'Negativo')));  ?>
  </label>

  <?php
  echo $this->Form->input('schirmer_d', array('div' => 'ls-label col-md-3', 'label' => 'Shirmer (mm/min)'));
  echo $this->Form->input('aplan_d', array('div' => 'ls-label col-md-3', 'label' => 'Aplan (mmHg)'));
  ?>

  <label class="ls-label col-md-3">
    <b class="ls-label-text">Fluoresceína</b>
    <?php echo $this->Form->input('fluoresceina_d', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('+' => 'Positivo','-' => 'Negativo'))); ?>
  </label>

  <label class="ls-label col-md-3">
    <b class="ls-label-text">Jones</b>
    <?php echo $this->Form->input('jones_d', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('+' => 'Positivo','-' => 'Negativo'))); ?>
  </label>
</fieldset>

<fieldset>
    <?php
    echo $this->Form->input('palpebras_d', array('div' => 'ls-label col-md-3', 'label' => 'Pálpebras'));
    echo $this->Form->input('aparelho_lacrimal_d', array('div' => 'ls-label col-md-3', 'label' => 'Aparelho Lacrimal'));
    echo $this->Form->input('conjuntiva_d', array('div' => 'ls-label col-md-3', 'label' => 'Conjuntiva'));
    echo $this->Form->input('cornea_d', array('div' => 'ls-label col-md-3', 'label' => 'Córnea'));
    echo $this->Form->input('camara_ant_angu_drenagem_d', array('div' => 'ls-label col-md-3', 'label' => 'Câ. Ant. e Âng. de Drenagem'));
    echo $this->Form->input('pupila_iris_d', array('div' => 'ls-label col-md-3', 'label' => 'Pupila e Íris'));
    echo $this->Form->input('lente_d', array('div' => 'ls-label col-md-3', 'label' => 'Lente'));
    echo $this->Form->input('fundo_vitreo_d', array('div' => 'ls-label col-md-3', 'label' => 'Fundo e Vítreo'));
    ?>
</fieldset>

<fieldset>
  <label class="ls-label col-md-3">
    <b class="ls-label-text">Imagem</b>
    <?php echo $this->Form->input('upload_d', array('type'=>'file', 'div' => false, 'label' => false)); ?>
  </label>
</fieldset>

<br>

<fieldset>
    <?php echo $this->Html->image('/img/consultas/'.$imagem_d, array('alt' => '', 'height' => 200)); ?>
</fieldset>

<hr>

<fieldset>
  <h4 class="ls-title-4">Olho Esquerdo</h4>
  <br/>
  <?php echo $this->Form->input('imagem_e', array('type' => 'hidden')); ?>

  <label class="ls-label col-md-3">
    <b class="ls-label-text">Reflexos Direto</b>
    <?php echo $this->Form->input('reflexos_direto_e', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('+' => 'Positivo','-' => 'Negativo'))); ?>
  </label>

    <label class="ls-label col-md-3">
      <b class="ls-label-text">Reflexo Consensual</b>
      <?php echo $this->Form->input('reflexos_consensual_e', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('+' => 'Positivo','-' => 'Negativo'))); ?>
    </label>

    <label class="ls-label col-md-3">
      <b class="ls-label-text">Reflexos de Ameaça</b>
      <?php echo $this->Form->input('reflexos_ameaca_e', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('+' => 'Positivo','-' => 'Negativo'))); ?>
    </label>

    <?php
    echo $this->Form->input('schirmer_e', array('div' => 'ls-label col-md-3', 'label' => 'Shirmer (mm/min)'));
    echo $this->Form->input('aplan_e', array('div' => 'ls-label col-md-3', 'label' => 'Aplan (mmHg)'));
    ?>

    <label class="ls-label col-md-3">
      <b class="ls-label-text">Fluoresceína</b>
      <?php echo $this->Form->input('fluoresceina_e', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('+' => 'Positivo','-' => 'Negativo')));  ?>
    </label>

    <label class="ls-label col-md-3">
      <b class="ls-label-text">Jones</b>
      <?php echo $this->Form->input('jones_e', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('+' => 'Positivo','-' => 'Negativo')));  ?>
    </label>
</fieldset>

<fieldset>
    <?php
    echo $this->Form->input('palpebras_e', array('div' => 'ls-label col-md-3', 'label' => 'Pálpebras'));
    echo $this->Form->input('aparelho_lacrimal_e', array('div' => 'ls-label col-md-3', 'label' => 'Aparelho Lacrimal'));
    echo $this->Form->input('conjuntiva_e', array('div' => 'ls-label col-md-3', 'label' => 'Conjuntiva'));
    echo $this->Form->input('cornea_e', array('div' => 'ls-label col-md-3', 'label' => 'Córnea'));
    echo $this->Form->input('camara_ant_angu_drenagem_e', array('div' => 'ls-label col-md-3', 'label' => 'Câm. Ant. e Âng. de Drenagem'));
    echo $this->Form->input('pupila_iris_e', array('div' => 'ls-label col-md-3', 'label' => 'Pupila e Íris'));
    echo $this->Form->input('lente_e', array('div' => 'ls-label col-md-3', 'label' => 'Lente'));
    echo $this->Form->input('fundo_vitreo_e', array('div' => 'ls-label col-md-3', 'label' => 'Fundo e Vítreo'));
    ?>
</fieldset>

<fieldset>
  <label class="ls-label col-md-3">
    <b class="ls-label-text">Imagem</b>
    <?php echo $this->Form->input('upload_e', array('type'=>'file', 'div' => false, 'label' => false)); ?>
  </label>
</fieldset>

<br>

<fieldset>
  <?php echo $this->Html->image('/img/consultas/'.$imagem_e, array('alt' => '', 'height' => 200));?>
</fieldset>

<hr>

<fieldset>
  <label class="ls-label">
    <b class="ls-label-text">Diagnóstico</b>
    <?php echo $this->Form->input('diagnostico', array('class' => 'ls-textarea-resize-horizontal','div' => false, 'label' => false)); ?>
  </label>

  <label class="ls-label">
    <b class="ls-label-text">Tratamento</b>
    <?php echo $this->Form->input('tratamento', array('class' => 'ls-textarea-resize-horizontal','div' => false, 'label' => false)); ?>
  </label>
</fieldset>

<?php echo $this->Form->end(array('div' => 'ls-actions-btn', 'label' => 'Atualizar', 'class' => 'ls-btn-primary')); ?>
