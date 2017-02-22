<?php

	include("cabecalho.php");
	include("conexao.php");
  include("cliente.php");
// Fim das inclusões
?>

<table class="table table-striped table-bordered">
	<?php
	// Ler do banco e mostrar na tela

	$clientes = listaCliente($conexao);
	foreach ($clientes as $cliente):
	 ?>
	 
	<tr>
	  <td><?= $cliente['id'] ?></td>
	  <td><?= $cliente['nome'] ?></td>
	  <td><?= $cliente['cpf'] ?></td>
	  <td><?= $cliente['endereco'] ?></td>
	  <td><?= $cliente['complemento'] ?></td>
	  <td><?= $cliente['bairro'] ?></td>
	  <td><?= $cliente['cep'] ?></td>
	  <td><?= $cliente['cidade'] ?></td>
	  <td><?= $cliente['telefone'] ?></td>
	  <td><?= $cliente['celular'] ?></td>
	  <td><?= $cliente['saldo'] ?></td>
	  <td><?= $cliente['email'] ?></td>
	</tr>

	<?php
	  endforeach
	 ?>
</table>
<?php
// Inclui rodape
  include("rodape.php");
 ?>
