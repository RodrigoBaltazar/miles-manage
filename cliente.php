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
			$saldo,$email);

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
		$data = date("m");
		$data_atual = date("Y");
		$clientes = array();
		$resultado = mysqli_query($conexao, "select * FROM cliente where data_nascimento between '1900-{$data}-01' and '{$data_atual}-{$data}-31'");

		while($cliente = mysqli_fetch_assoc($resultado)){
			array_push($clientes, $cliente);
		}
		return $clientes;
	}

	function alteraCliente($conexao, cliente $cliente){

		$query = "update cliente set nome = '{$cliente->getNome()}', data_nascimento = '{$cliente->getData_nascimento()}', cpf = '{$cliente->getCpf()}', endereco = '{$cliente->getEndereco()}', complemento = '{$cliente->getComplemento()}', bairro = '{$cliente->getBairro()}', cep = '{$cliente->getCep()}', cidade = '{$cliente->getCidade()}', telefone = '{$cliente->getTelefone()}', celular = '{$cliente->getCelular()}',
																				saldo = '{$cliente->getSaldo()}', email = '{$cliente->getEmail()}' where id = '{$cliente->getId()}'";
		echo $query;
	  return mysqli_query($conexao, $query);

	}

	function buscaCliente($conexao, $id){
		$query = "select * from cliente where id = '{$id}'";
		$resultado = mysqli_query($conexao, $query);

		$cliente_buscado = mysqli_fetch_assoc($resultado);

			$id = $cliente_buscado['id'];
			$nome = $cliente_buscado['nome'];
			$data_nascimento = $cliente_buscado['data_nascimento'];
			$cpf = $cliente_buscado['cpf'];
			$endereco = $cliente_buscado['endereco'];
			$complemento = $cliente_buscado['complemento'];
			$bairro = $cliente_buscado['bairro'];
			$cep = $cliente_buscado['cep'];
			$cidade = $cliente_buscado['cidade'];
			$telefone = $cliente_buscado['telefone'];
			$celular = $cliente_buscado['celular'];
			$saldo = $cliente_buscado['saldo'];
			$data_nascimento = $cliente_buscado['data_nascimento'];
			$email = $cliente_buscado['email'];

		// $id = $cliente->getId();
		// $nome =	$cliente->getNome();
		// $cpf =	$cliente->getCpf();
		// $endereco =$cliente->getEndereco();
		// $complemento =$cliente->getComplemento();
		// $bairro =$cliente->getBairro();
		// $cep =	$cliente->getCep();
		// $cidade =$cliente->getCidade();
		// $telefone =$cliente->getTelefone();
		// $celular = $cliente->getCelular();
		// $saldo = $cliente->getSaldo();
		// $data_nascimento = $cliente->getData_nascimento();
		// $email = $cliente->getEmail();

		$cliente = new cliente($id, $nome,$data_nascimento,$cpf,$endereco,
		$complemento,$bairro,$cep,$cidade,$telefone,$celular,
		$saldo,$data_nascimento,$email);

		$cliente->setId($cliente_buscado['id']);

		return $cliente;
	}

	function exibeClienteDetalhe($conexao, $id){
		$query = "select * from cliente where id = '{$id}'";
		$resultado = mysqli_query($conexao, $query);

		$cliente_buscado = mysqli_fetch_assoc($resultado);

		$id = $cliente_buscado['id'];
		$nome = $cliente_buscado['nome'];
		//$data_nascimento = $cliente_buscado['data_nascimento'];
		$cpf = $cliente_buscado['cpf'];
		$endereco = $cliente_buscado['endereco'];
		$complemento = $cliente_buscado['complemento'];
		$bairro = $cliente_buscado['bairro'];
		$cep = $cliente_buscado['cep'];
		$cidade = $cliente_buscado['cidade'];
		$telefone = $cliente_buscado['telefone'];
		$celular = $cliente_buscado['celular'];
		$saldo = $cliente_buscado['saldo'];
		$data_nascimento = $cliente_buscado['data_nascimento'];
		$email = $cliente_buscado['email'];

		$cliente = new cliente($id, $nome,/*$data_nascimento,*/$cpf,$endereco,
		$complemento,$bairro,$cep,$cidade,$telefone,$celular,
		$saldo,$data_nascimento,$email);

		$cliente->setId($cliente_buscado['id']);
		$cliente->setNome($cliente_buscado['nome']);
		$cliente->setData_nascimento($cliente_buscado['data_nascimento']);
		$cliente->setCpf($cliente_buscado['cpf']);

		return $cliente->getNome();
	}
