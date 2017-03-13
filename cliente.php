<?php

	// CRUD

	include("conexao.php");
	require_once("class/classCliente.php");


	function insereCliente($conexao, cliente $cliente){


		$query = "INSERT INTO cliente (id, nome, data_nascimento, cpf, endereco, complemento, bairro, cep, cidade, telefone, celular, saldo, email)
		VALUES ('{$cliente->getId()}', '{$cliente->getNome()}', '{$cliente->getData_nascimento()}', '{$cliente->getCpf()}', '{$cliente->getEndereco()}', '{$cliente->getComplemento()}', '{$cliente->getBairro()}', '{$cliente->getCep()}', '{$cliente->getCidade()}',
		 '{$cliente->getTelefone()}', '{$cliente->getCelular()}', '{$cliente->getSaldo()}','{$cliente->getEmail()}')";

		return mysqli_query($conexao, $query);

	}

//lista todos os clientes
	function listaCliente($conexao){
		$clientes = array();
		$resultado = mysqli_query($conexao, "select * FROM cliente");

		while($cliente_array = mysqli_fetch_assoc($resultado)){

			$id = $cliente_array['id'];
			$nome = $cliente_array['nome'];
			$data_nascimento = $cliente_array['data_nascimento'];
			$cpf = $cliente_array['cpf'];
			$endereco = $cliente_array['endereco'];
			$complemento = $cliente_array['complemento'];
			$bairro = $cliente_array['bairro'];
			$cep = $cliente_array['cep'];
			$cidade = $cliente_array['cidade'];
			$telefone = $cliente_array['telefone'];
			$celular = $cliente_array['celular'];
			$saldo = $cliente_array['saldo'];
			$data_nascimento = $cliente_array['data_nascimento'];
			$email = $cliente_array['email'];

			$cliente = new cliente($id,$nome,$data_nascimento,$cpf,$endereco,
			$complemento,$bairro,$cep,$cidade,$telefone,$celular,
			$saldo,$data_nascimento,$email);

			//$cliente->setId($cliente_array['id']);

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
