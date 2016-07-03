<h1 class="ls-title-intro ls-ico-pencil">Alteração de Proprietário</h1>

<?php

echo $this->Form->create('Proprietario', array('action' => 'edit', 'class' => 'ls-form ls-form-horizontal row'));?>

<fieldset>
<?php
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('nome', array('div' => 'ls-label col-md-3'));
echo $this->Form->input('endereco', array('div' => 'ls-label col-md-3', 'label' => 'Endereço'));
echo $this->Form->input('numero', array('div' => 'ls-label col-md-3', 'label' => 'Número'));
echo $this->Form->input('complemento', array('div' => 'ls-label col-md-3'));
echo $this->Form->input('bairro', array('div' => 'ls-label col-md-3'));
echo $this->Form->input('cidade', array('div' => 'ls-label col-md-3'));
?>

<label class="ls-label col-md-3">
  <b class="ls-label-text">UF</b>
<?php echo $this->Form->input('uf', array('div' => 'ls-custom-select', 'class' => 'ls-custom', 'label' => false, 'options' => array('AC' => 'Acre',
'AL' => 'Alagoas',
'AP' => 'Amapá',
'AM' => 'Amazonas',
'BA' => 'Bahia',
'CE' => 'Ceará',
'DF' => 'Distrito Federal',
'ES' => 'Espírito Santo',
'GO' => 'Goiás',
'MA' => 'Maranhão',
'MT' => 'Mato Grosso',
'MS' => 'Mato Grosso do Sul',
'MG' => 'Minas Gerais',
'PA' => 'Pará',
'PB' => 'Paraíba',
'PR' => 'Paraná',
'PE' => 'Pernambuco',
'PI' => 'Piauí',
'RJ' => 'Rio de Janeiro',
'RN' => 'Rio Grande do Norte',
'RS' => 'Rio Grande do Sul',
'RO' => 'Rondônia',
'RR' => 'Roraima',
'SC' => 'Santa Catarina',
'SP' => 'São Paulo',
'SE' => 'Sergipe',
'TO' => 'Tocantins'
), 'empty' => ''));
?>
</label>

<?php
echo $this->Form->input('cep', array('div' => 'ls-label col-md-3', 'label' => 'CEP'));
echo $this->Form->input('email', array('div' => 'ls-label col-md-3', 'label' => 'E-mail'));
echo $this->Form->input('telefone', array('div' => 'ls-label col-md-3'));
?>
</fieldset>

<?php echo $this->Form->end(array('div' => 'ls-actions-btn', 'label' => 'Atualizar', 'class' => 'ls-btn-primary')); ?>
