<?php

	include("cabecalho.php");
	include("conexao.php");
  include("cliente.php");
// Fim das inclusões
?>
<h1>Pesquisar clientes: </h1>
<table align="center">
	<tr class="table table-bordered">
		<form action="pesquisar.php?" id="pesquisar">

		<td><input type="text" class="form-control" name="nome" placeholder="Digite o nome:"></td>
		<td><button type="submit" class="btn btn-primary" value="Pesquisar">Pesquisar</button></td>
	</tr>
		</form>
</table>
<h1>Clientes:</h1>

  <table class="table table-striped table-bordered">
	<tr class="table-danger">
		<td>#</td>
		<td>Nome:</td>
		<td>CPF:</td>
		<td>Endereço:</td>
		<td>Complemento:</td>
		<td>Bairro:</td>
		<td>Cep:</td>
		<td>Cidade:</td>
		<td>Telefone:</td>
		<td>Celular:</td>
		<td>Saldo de pontos:</td>
		<td>E-mail:</td>
	</tr>
	 <?php
	// Ler do banco e mostrar na tela

	 $clientes = pesquisaCliente($conexao, $_GET['nome']);
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
		<td><?= $cliente['data_nascimento'] ?></td>
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
