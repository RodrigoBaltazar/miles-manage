<?php

	include("cabecalho.php");

?>

<table class="table">
  <tr>
    <td>Pontos</td>
    <td>para->$$$</td>
    <!-- <td>$$$</td> -->
  </tr>
  <tr>
    <td><input type="text" class="form-control" id="pontos" value="0"></td>
    <td><input type="text" class="form-control" id="exibe_reais" value= "0"></td>
    <td><input type="button" class="btn btn-primary active" value="Simular" onclick="simulaPontos();"></td>
  </tr>

</table><table class="table">
  <tr>
    <td>$$$</td>
    <td>para->Pontos</td>
  </tr>
  <tr>
    <td><input type="text" class="form-control" id="reais" value="0"></td>
    <td><input type="text" class="form-control" id="exibe_pontos" value= "0"></td>
    <td><input type="button" class="btn btn-primary active"value="Simular" onclick="simulaDinheiro();"></td>
  </tr>

</table>

<?php
  include("rodape.php");
 ?>
