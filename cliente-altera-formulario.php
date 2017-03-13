<?php
  require_once("cabecalho.php");
  require_once("cliente.php");
  require_once("conexao.php");

 ?>
<?php

$id = $_GET['id'];
$cliente = buscaCliente($conexao, $id);

?>

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
 </tr>

<?php
exibeClienteDetalhe($conexao, $id);
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
</tr>

<h1>Alterando Cliente</h1>
<form action="altera-cliente.php" method="post">
    <input type="hidden" name="id" value="<?=$cliente->getId() ?>">
    <table class="table">
      <tr>
  				<td>Nome:</td>
  				<td><input type="text" class="form-control" name="nome" ></td>
  		</tr>
  		<tr>
  				<td>CPF:</td>
  				<td><input type="text" class="form-control" name="cpf" ></td>
  		</tr>
  		<tr>
  				<td>Endereço:</td>
  				<td><input type="text" class="form-control"  name="endereco"></td>
  		</tr>
  		<tr>
  				<td>Complemento:</td>
  				<td><input type="text" class="form-control"  name="complemento"></td>
  		</tr>
  		<tr>
  				<td>Bairro:</td>
  				<td><input type="text" class="form-control"  name="bairro"></td>
  		</tr>
  		<tr>
  				<td>CEP</td>
  				<td><input type="text" class="form-control"  name="cep"></td>
  		</tr>
  		<tr>
  				<td>Cidade:</td>
  				<td><input type="text" class="form-control" name="cidade" ></td>
  		</tr>
  		<tr>
  				<td>Telefone:</td>
  				<td><input type="text" class="form-control" name="telefone" ></td>
  		</tr>
  		<tr>
  				<td>Celular:</td>
  				<td><input type="text" class="form-control" name="celular" ></td>
  		</tr>
  		<tr>
  				<td>Data de nascimento:</td>
  				<td><input type="text" class="form-control" name="data_nascimento" ></td>
  		</tr>
  		<tr>
  				<td>E-mail:</td>
  				<td><input type="email" class="form-control" name="email" ></td>
  		</tr>
  		<tr>
  				<td>Saldo:</td>
  				<td><input type="text" class="form-control" name="saldo" ></td>
  		</tr>
  		<tr>
  			<td><button type="submit" class="btn btn-primary">Alterar</button></td>
  		</tr>
  	</form>




 <?php
 require_once("rodape.php");
 ?>
