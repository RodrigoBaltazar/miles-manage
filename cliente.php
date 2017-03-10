<?php

	// CRUD

	include("conexao.php");


	function insereCliente($conexao, $id, $nome, $nascimento, $cpf, $endereco, $complemento, $bairro, $cep, $cidade, $telefone, $celular, $saldo, $email){


		$query = "INSERT INTO cliente (id, nome, data_nascimento, cpf, endereco, complemento, bairro, cep, cidade, telefone, celular, saldo, email)
		VALUES ('{$id}', '{$nome}', '{$nascimento}', '{$cpf}', '{$endereco}', '{$complemento}', '{$bairro}', '{$cep}', '{$cidade}', '{$telefone}', '{$celular}', '{$saldo}','{$email}')";
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
// FALTA MUDAR LINHA 38 DATA DE NASCIMENTO
	function aniversariantesCliente($conexao){
		$clientes = array();
		$resultado = mysqli_query($conexao, "select * FROM cliente where nome LIKE '%{$nome}%'");

		while($cliente = mysqli_fetch_assoc($resultado)){
			array_push($clientes, $cliente);
		}
		return $clientes;
	}
