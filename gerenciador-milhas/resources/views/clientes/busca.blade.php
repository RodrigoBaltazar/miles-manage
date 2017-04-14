@extends('layout.principal')

@section('conteudo')


<table align="center">
	<tr class="table table-bordered">
		<form action="pesquisar.php?" id="pesquisar">

		<td><input type="text" class="form-control" name="nome" placeholder="Digite o nome:"></td>
		<td><button type="submit" class="btn btn-primary" value="Pesquisar">Pesquisar</button></td>
	</tr>
		</form>

@section('footer')
@stop
