<html>
<head>
  <link href="/css/app.css" rel="stylesheet">
  <link href="/css/bootstrap.css" rel="stylesheet">
  <script type="text/javascript" src="{{ asset('/public/js/simulador.js') }}"></script>

  <title>Detalhe do Cliente</title>
</head>
<body>
  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
          <div class="navbar-header">
              <a href="{{action('ClienteController@clientePesquisa')}}" class="navbar-brand">Milhagem Farmais</a>
          </div>
          <div>
              <ul class="nav navbar-nav">
                  <li><a href="{{action('ClienteController@lista')}}">Extrato</a></li>
                  <li><a href="{{action('ClienteController@novo')}}">Cadastrar</a></li>
                  <li><a href="{{action('ClienteController@simulador')}}">Simulador</a></li>
                  <li><a href="aniversariantes.php">Aniversariantes do Mês</a></li>
              </ul>
          </div>
      </div>
  </div>



  <div class="principal">
    <br>
    <br>
    @yield('conteudo')
    <br>
    <br>
    <br>
    <br>



    <!-- <footer class="footer">
      <p>© Rodrigo de Lemos Baltazar
    </footer> -->

  </div>

</html>
