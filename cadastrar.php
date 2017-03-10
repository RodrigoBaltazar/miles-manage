<?php

	include("cabecalho.php");
	include ("conexao.php");
	include("cliente.php");
?>
<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$saldo = $_POST['saldo'];
$nascimento = $_POST['data_nascimento'];
$email = $_POST['email'];


if(insereCliente($conexao, $id, $nome, $nascimento, $cpf, $endereco, $complemento, $bairro,
									$cep, $cidade, $telefone, $celular, $saldo, $email)){
									 	?><br><br><br><p class="text-success">O cliente
									 	  foi adicionado com sucesso!</p><?php

								}else{
										echo  mysqli_error($conexao); ?>
										 <br><br><br><p class="text-danger">ERRO no CADASTRO</p><?php
									}
									?>


<?php
	include("rodape.php");

?>
