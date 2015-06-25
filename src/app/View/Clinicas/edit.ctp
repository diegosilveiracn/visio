<h3>Alteração de Clínica</h3>

<?php

echo $this->Form->create('Clinica', array('action' => 'edit'));

echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('nome');
echo $this->Form->input('endereco', array('label' => 'Endereço'));
echo $this->Form->input('numero', array('label' => 'Número'));	 
echo $this->Form->input('complemento');
echo $this->Form->input('bairro');
echo $this->Form->input('cidade');
echo $this->Form->input('uf', array('options' => array('AC' => 'Acre',
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
                                                          )
                               ,'empty' => ''
                               ,'label' => 'UF')
                        );
echo $this->Form->input('cep', array('label' => 'CEP'));
echo $this->Form->input('email', array('label' => 'E-mail'));
echo $this->Form->input('telefone');

echo $this->Form->end('Alterar');

?>
