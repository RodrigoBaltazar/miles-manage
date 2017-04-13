<html>
<head>
  <link href="/css/app.css" rel="stylesheet">
  <link href="/css/bootstrap.css" rel="stylesheet">
  <title>Detalhe do Cliente</title>
</head>
<body>
  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
          <div class="navbar-header">
              <a href="index.php" class="navbar-brand">Milhagem Farmais</a>
          </div>
          <div>
              <ul class="nav navbar-nav">
                  <li><a href="<?php echo e(action('ClienteController@lista')); ?>">Extrato</a></li>
                  <li><a href="<?php echo e(action('ClienteController@novo')); ?>">Cadastrar</a></li>
                  <li><a href="simulador.php">Simulador</a></li>
                  <li><a href="aniversariantes.php">Aniversariantes do Mês</a></li>
              </ul>
          </div>
      </div>
  </div>



  <div class="principal">
    <br>
    <br>
    <?php echo $__env->yieldContent('conteudo'); ?>


    <footer class="footer">
      <p>© Rodrigo de Lemos Baltazar
    </footer>

  </div>

</html>
