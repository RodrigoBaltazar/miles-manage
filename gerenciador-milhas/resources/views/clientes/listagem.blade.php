@extends('layout.principal')

@section('conteudo')
    <div class="container">
    <h1>Listagem de clientes</h1>
    @if(old('nome'))
    <div class="alert alert-success">
      <strong>Sucesso!</strong>
          O cliente {{ old('nome') }} foi adicionado.
    </div>
  @endif
    <table class="table table-striped table-bordered table-hover">
      @foreach ($clientes as $c)
      <tr>
        <!-- Descrição do Banco de Dados -->
        <tr>
          <td>ID:</td>
          <td>Nome:</td>
          <td>Data de Nascimento:</td>
          <td>CPF:</td>
          <td>Rua:</td>
          <td>Complemento:</td>
          <td>Bairro:</td>
          <td>cep:</td>
          <td>Cidade:</td>
          <td>Telefone:</td>
          <td>Celular:</td>
          <td>Saldo:</td>
          <td>E-mail:</td>
        </tr>
        <!-- Descrição do Banco de Dados -->
        <td> {{ $c->id }}</td>
        <td> {{ $c->nome }}</td>
        <td> {{ $c->data_nascimento }}</td>
        <td> {{ $c->cpf }}</td>
        <td> {{ $c->endereco }}</td>
        <td> {{ $c->complemento }}</td>
        <td> {{ $c->bairro }}</td>
        <td> {{ $c->cep }}</td>
        <td> {{ $c->cidade }}</td>
        <td> {{ $c->telefone}}</td>
        <td> {{ $c->celular }}</td>
        <td> {{ $c->saldo }}</td>
        <td> {{ $c->email }}</td>
        <td><a href="/clientes/detalhes/<?= $c->id ?>">
          <span class="glyphicon glyphicon-search"></span>
        </td>
      </tr>
      @endforeach
    </table>


  </div>
@stop
