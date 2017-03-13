<?php
require_once("cabecalho.php");
require_once("cliente.php");
require_once("class/classCliente.php");

?>

<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$saldo = $_POST['saldo'];
$email = $_POST['email'];



$cliente = new cliente($id, $nome,$data_nascimento,$cpf,$endereco,
                      $complemento,$bairro,$cep,$cidade,$telefone,$celular,
                      $saldo,$email);
$cliente->setId($_POST['id']);

if(alteraCliente($conexao, $cliente)) { ?>
	<p class="text-success">O cliente <?= $cliente->getNome() ?> foi alterado.</p>
<?php
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O cliente <?= $cliente->getNome() ?> não foi alterado: <?= $msg?></p>
<?php
}
?>




<?php
require_once("rodape.php");
 ?>
