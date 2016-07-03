<h1 class="ls-title-intro ls-ico-info">Visualização de Clínica</h1>

<table class="ls-table ls-no-hover ls-table-striped">
  <tr>
    <th>Nome</th>
    <td><?php echo $clinica['Clinica']['nome'] != null ? $clinica['Clinica']['nome'] : "Não informado"; ?></td>
  </tr>

  <tr>
    <th>Endereço</th>
    <td> <?php echo $clinica['Clinica']['endereco'] != null ? $clinica['Clinica']['endereco'] : "Não informado"; ?>
    </td>
  </tr>

  <tr>
    <th>Número</th>
    <td>
      <?php echo $clinica['Clinica']['numero'] != null ? $clinica['Clinica']['numero'] : "Não informado"; ?>
    </td>
  </tr>

  <tr>
    <th>Complemento</th>
    <td><?php echo $clinica['Clinica']['complemento'] != null? $clinica['Clinica']['complemento']:"Não informado" ; ?></td>
  </tr>

  <tr>
    <th>Bairro</th>
    <td>
      <?php echo $clinica['Clinica']['bairro'] != null ? $clinica['Clinica']['bairro'] : "Não informado"; ?>
    </td>
  </tr>

  <tr>
    <th>Cidade</th>
    <td>
      <?php echo $clinica['Clinica']['cidade'] != null ? $clinica['Clinica']['cidade'] : "Não informado"; ?>
    </td>
  </tr>

  <tr>
    <th>UF</th>
    <td><?php echo $clinica['Clinica']['uf'] != null ? $clinica['Clinica']['uf'] : "Não informado"; ?></td>
  </tr>

  <tr>
    <th>CEP</th>
    <td><?php echo $clinica['Clinica']['cep'] != null ? $clinica['Clinica']['cep'] : "Não informado"; ?></td>
  </tr>

  <tr>
    <th>E-mail</th>
    <td><?php echo $clinica['Clinica']['email'] != null ? $clinica['Clinica']['email'] : "Não informado"; ?></td>
  </tr>

  <tr>
    <th>Telefone</th>
    <td><?php echo $clinica['Clinica']['telefone'] != null ? $clinica['Clinica']['telefone'] : "Não informado"; ?></td>
  </tr>
</table>
