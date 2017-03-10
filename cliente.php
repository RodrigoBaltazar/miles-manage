<?php

	// CRUD

	include("conexao.php");


	function insereCliente($conexao, $id, $nome, $cpf, $endereco, $complemento, $bairro, $cep, $cidade, $telefone, $celular, $saldo, $email){


		$query = "INSERT INTO cliente (id, nome, cpf, endereco, complemento, bairro, cep, cidade, telefone, celular, saldo, email)
		VALUES ('{$id}', '{$nome}', '{$cpf}', '{$endereco}', '{$complemento}', '{$bairro}', '{$cep}', '{$cidade}', '{$telefone}', '{$celular}', '{$saldo}','{$email}')";
		return mysqli_query($conexao, $query);
	}

	function listaCliente($conexao){
		$clientes = array();
		$resultado = mysqli_query($conexao, "select * FROM cliente");

		while($cliente = mysqli_fetch_assoc($resultado)){
			array_push($clientes, $cliente);
		}
		return $clientes;
	}

	function pesquisaCliente($conexao, $nome){
		$clientes = array();
		$resultado = mysqli_query($conexao, "select * FROM cliente where nome LIKE '%{$nome}%'");

		while($cliente = mysqli_fetch_assoc($resultado)){
			array_push($clientes, $cliente);
		}
		return $clientes;
	}
