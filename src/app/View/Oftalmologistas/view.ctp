<h1 class="ls-title-intro ls-ico-info">Visualização de Oftalmologista</h1>

<table class="ls-table ls-no-hover ls-table-striped">
<tr>
  <th>Nome</th>
  <td><?php echo $oftalmologista['Oftalmologista']['nome'] != null? $oftalmologista['Oftalmologista']['nome'] : "Não informado"; ?></td>
</tr>

<tr>
  <th>E-mail</th>
  <td><?php echo $oftalmologista['Oftalmologista']['email'] != null? $oftalmologista['Oftalmologista']['email'] : "Não informado" ; ?></td>
</tr>

<tr>
  <th>CRMV</th>
  <td><?php echo $oftalmologista['Oftalmologista']['crmv'] != null ? $oftalmologista['Oftalmologista']['crmv']: "Não informado" ; ?> </td>
</tr>
</table>
