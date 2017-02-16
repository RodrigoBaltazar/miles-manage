<?php

	// CRUD

	include("conexao.php");


	function insere($id, $nome, $cpf, $endereco, $complemento, $bairro, $cep, $cidade, $telefone, $celular, $nascimento, $saldo){


		$sql = "INSERT INTO cliente VALUES ('$id', '$nome', '$cpf', '$endereco', '$complemento', '$bairro', '$cep', '$cidade', '$telefone', '$celular', '$saldo', '$nascimento')";

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "miles";

		echo "Passou por aqui";
		echo "<script>console.log('passou por aqui');</script>";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	}

?>