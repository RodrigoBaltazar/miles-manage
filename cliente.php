<?php

	// CRUD

	include("conexao.php");
	require_once("class/classCliente.php");
	require_once("cadastrar.php");




	function insereCliente($conexao, $cliente){


		$query = "INSERT INTO cliente (id, nome, data_nascimento, cpf, endereco, complemento, bairro, cep, cidade, telefone, celular, saldo, email)
		VALUES ('{$cliente->getId()}', '{$cliente->getNome()}', '{$cliente->getData_nascimento()}', '{$cliente->getCpf()}', '{$cliente->getEndereco()}', '{$cliente->getComplemento()}', '{$cliente->getBairro()}', '{$cliente->getCep()}', '{$cliente->getCidade()}',
		 '{$cliente->getTelefone()}', '{$cliente->getCelular()}', '{$cliente->getSaldo()}','{$cliente->getEmail()}')";
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
