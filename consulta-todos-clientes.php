<?php

	include("cabecalho.php");
	include("conexao.php");
  include("cliente.php");
	require_once("class/classCliente.php");
	//require_once("cadastrar.php");
// Fim das inclusões
?>
<!-- <h1>Pesquisar clientes: </h1>
<table align="center">
	<tr class="table table-bordered">
		<form action="pesquisar.php?go" id="pesquisar">

		<td><input type="text" class="form-control" name="nome" placeholder="Digite o nome:"></td>
		<td><button type="submit" class="btn btn-primary" value="Pesquisar">Pesquisar</button></td>
	</tr>
</table> -->
<h1>Todos clientes:</h1>


 <table class="table table-striped table-bordered">
	<tr class="table-danger">
		<td>#</td>
		<td>Nome:</td>
    <td>Data Nascimento:</td>
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
		<td>Detalhes:</td>
	</tr>
	 <?php
	// Ler do banco e mostrar na tela

	 $clientes = listaCliente($conexao);
	 foreach ($clientes as $cliente):
	 ?>

	<tr>
		<td><?= $cliente->getId() ?></td>
	  <td><?= $cliente->getNome() ?></td>
		<td><?= $cliente->getData_nascimento() ?></td>
	  <td><?= $cliente->getCpf() ?></td>
	  <td><?= $cliente->getEndereco() ?></td>
	  <td><?= $cliente->getComplemento() ?></td>
	  <td><?= $cliente->getBairro() ?></td>
	  <td><?= $cliente->getCep() ?></td>
	  <td><?= $cliente->getCidade() ?></td>
	  <td><?= $cliente->getTelefone() ?></td>
	  <td><?= $cliente->getCelular() ?></td>
	  <td><?= $cliente->getSaldo() ?></td>
	  <td><?= $cliente->getEmail() ?></td>
		<td><a class="btn btn-primary" href="cliente-altera-formulario.php?id=<?php echo $cliente->getId()?>">
		Detalhes</a>
		</td>
	</tr>

	<?php
	  endforeach
	 ?>
</table>
<?php
// Inclui rodape
  include("rodape.php");
 ?>
