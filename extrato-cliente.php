<?php

	include("cabecalho.php");
	//include("conexao.php");
  include("cliente.php");
	require_once("class/classCliente.php");

// Fim das inclusões
?>
<h1>Pesquisar clientes: </h1>
<table align="center">
	<tr class="table table-bordered">
		<form action="pesquisar.php?" id="pesquisar">

		<td><input type="text" class="form-control" name="nome" placeholder="Digite o nome:"></td>
		<td><button type="submit" class="btn btn-primary" value="Pesquisar">Pesquisar</button></td>
	</tr>
		</form>
</table>
<h1>Consulta todos clientes:</h1>
<form action="consulta-todos-clientes.php">
	<button type="submit" class="btn btn-primary" value="Pesquisar">Consultar</button>
</form>
</table>
<?php
// Inclui rodape
  include("rodape.php");
 ?>
