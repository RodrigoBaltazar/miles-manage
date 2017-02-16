<?php

	include("cabecalho.php");
	include("cliente.php");

	echo "<script>console.log('passou por aqui');</script>";
	insere($_POST['id'],$_POST['nome'],$_POST['cpf'],$_POST['endereco'],$_POST['complemento'],$_POST['bairro'],$_POST['cep'],$_POST['cidade'],$_POST['telefone'],$_POST['celular'],$_POST['saldo'], $_POST['nascimento']);

	include("rodape.php");

?>

