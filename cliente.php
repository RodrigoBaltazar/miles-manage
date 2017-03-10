<?php

	// CRUD

	include("conexao.php");
	



	function insereCliente($conexao, $id, $nome, $nascimento, $cpf, $endereco, $complemento, $bairro, $cep, $cidade, $telefone, $celular, $saldo, $email){


		$query = "INSERT INTO cliente (id, nome, data_nascimento, cpf, endereco, complemento, bairro, cep, cidade, telefone, celular, saldo, email)
		VALUES ('{$id}', '{$nome}', '{$nascimento}', '{$cpf}', '{$endereco}', '{$complemento}', '{$bairro}', '{$cep}', '{$cidade}', '{$telefone}', '{$celular}', '{$saldo}','{$email}')";
		return mysqli_query($conexao, $query);
	}

//lista todos os clientes
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
//trabalhar na linha 39 abaixo
	function aniversariantesCliente($conexao){
		//pega a data de hoje
		$data = date("Y-m");
		$clientes = array();
		$resultado = mysqli_query($conexao, "select * FROM cliente where data_nascimento between '{$data}-01' and '{$data}-31'");

		while($cliente = mysqli_fetch_assoc($resultado)){
			array_push($clientes, $cliente);
		}
		return $clientes;
	}
