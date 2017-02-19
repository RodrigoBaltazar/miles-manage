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
<table class="table">
	<form method="post" action="cadastrar.php">
		<tr>
				<td>ID:</td>
				<td><input type="text" class="form-control" name="id" ></td>
		</tr>
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
				<td><input type="text" class="form-control" name="nascimento" ></td>
		</tr>
		<tr>
				<td>Saldo:</td>
				<td><input type="text" class="form-control" name="saldo" ></td>
		</tr>
		<tr>
			<td><button type="submit" class="btn btn-primary">Cadastrar</button></td>
		</tr>
	</form>
</table>

<?php
	include("rodape.php");
?>
