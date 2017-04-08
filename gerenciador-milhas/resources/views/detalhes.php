<html>
<head>
  <link href="/css/app.css" rel="stylesheet">
  <link href="/css/bootstrap.css" rel="stylesheet">
  <title>Detalhe do Cliente</title>
</head>
<body>
  <div class="container">

  <h1>Nome: <?= $cliente->nome ?> </h1>
  <ul>
    <li>
      <b>Saldo:</b> <?= $cliente->saldo ?>
    </li>
    <li>
      <b>E-mail:</b> <?= $cliente->email ?>
    </li>
    <li>

    </li>
  </ul>

  </div>
</body>
</html>
