@extends('layout.principal')

@section('conteudo')
  <h1>Nome: {{ $cliente->nome }} </h1>
  <ul>
    <li>
      <b>Saldo:</b>  {{ $cliente->saldo }}
    </li>
    <li>
      <b>E-mail:</b> {{ $cliente->email }}
    </li>
    <li>

    </li>
  </ul>

  </div>

@stop
