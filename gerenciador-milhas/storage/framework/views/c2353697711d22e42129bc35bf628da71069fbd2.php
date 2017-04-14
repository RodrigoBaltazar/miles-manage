<?php $__env->startSection('conteudo'); ?>


<table align="center">
	<tr class="table table-bordered">
		<form action="clientes/pesquisa" id="pesquisa" method="get">

		<td><input type="text" class="form-control" name="nome" placeholder="Digite o nome:"></td>
		<td><button type="submit" class="btn btn-primary" value="Pesquisar">Pesquisar</button></td>
	</tr>
		</form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>