<?php

	include("cabecalho.php");
	include("conexao.php");


?>
<!-- SERA ALTERADO PARA O FORM DA LOJA -->
<style type="text/css">
	body {
		margin-top: 2cm;
	}
</style>

<form method="post" action="cadastrar.php">
	<label>ID:
		<input name="id" type="text">
	</label>
	<label>Nome:
		<input name="nome" type="text">
	</label>
	<label>CPF:
		<input name="cpf" type="text">
	</label>
	<label>Endereço:
		<input type="text" name="endereco">
	</label>
	<label>Complemento:
		<input type="text" name="complemento">
	</label>
	<label>Bairro:
		<input type="text" name="bairro">
	</label>
	<label>CEP
		<input type="text" name="cep">
	</label>
	<label>Cidade:
		<input name="cidade" type="text">
	</label>
	<label>Telefone:
		<input name="telefone" type="text">
	</label>
	<label>Celular:
		<input name="celular" type="text">
	</label>
	<label>Data de nascimento:
		<input name="nascimento" type="text">
	</label>
	<label>Saldo:
		<input name="saldo" type="text">
	</label>

	<input type="submit">
</form>

<?php
	include("rodape.php");
?>