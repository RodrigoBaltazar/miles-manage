<html>
  <head>
    <link href="/css/app.css" rel="stylesheet">
    <title>Lista de Clientes</title>
  </head>
  <body>
    <div class="container">
    <h1>Listagem de produtos</h1>
    <table class="table table-striped table-bordered table-hover">
      <?php foreach ($clientes as $c): ?>
      <tr>
        <td><?= $c->id ?></td>
        <td><?= $c->nome ?></td>
        <td><?= $c->data_nascimento ?></td>
        <td><?= $c->cpf ?></td>
        <td><?= $c->endereco ?></td>
        <td><?= $c->complemento ?></td>
        <td><?= $c->bairro ?></td>
        <td><?= $c->cep ?></td>
        <td><?= $c->cidade ?></td>
        <td><?= $c->telefone ?></td>
        <td><?= $c->celular ?></td>
        <td><?= $c->saldo ?></td>
        <td><?= $c->email ?></td>
      </tr>
      <?php endforeach ?>
    </table>
  </div>
  </body>
</html>
