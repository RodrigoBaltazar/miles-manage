<?php

	// CRUD

	include("conexao.php");


	function insereCliente($conexao, $id, $nome, $cpf, $endereco, $complemento, $bairro, $cep, $cidade, $telefone, $celular, $saldo, $email){


		$query = "INSERT INTO cliente (id, nome, cpf, endereco, complemento, bairro, cep, cidade, telefone, celular, saldo, email)
		VALUES ('{$id}', '{$nome}', '{$cpf}', '{$endereco}', '{$complemento}', '{$bairro}', '{$cep}', '{$cidade}', '{$telefone}', '{$celular}', '{$saldo}','{$email}')";
		return mysqli_query($conexao, $query);
	}
