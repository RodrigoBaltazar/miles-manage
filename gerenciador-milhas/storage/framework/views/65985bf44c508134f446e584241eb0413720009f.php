<?php $__env->startSection('conteudo'); ?>
    <div class="container">
    <h1>Listagem de clientes</h1>
    <?php if(old('nome')): ?>
    <div class="alert alert-success">
      <strong>Sucesso!</strong>
          O cliente <?php echo e(old('nome')); ?> foi adicionado.
    </div>
  <?php endif; ?>
    <table class="table table-striped table-bordered table-hover">

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
        <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Descrição do Banco de Dados -->
        <td> <?php echo e($c->id); ?></td>
        <td> <?php echo e($c->nome); ?></td>
        <td> <?php echo e($c->data_nascimento); ?></td>
        <td> <?php echo e($c->cpf); ?></td>
        <td> <?php echo e($c->endereco); ?></td>
        <td> <?php echo e($c->complemento); ?></td>
        <td> <?php echo e($c->bairro); ?></td>
        <td> <?php echo e($c->cep); ?></td>
        <td> <?php echo e($c->cidade); ?></td>
        <td> <?php echo e($c->telefone); ?></td>
        <td> <?php echo e($c->celular); ?></td>
        <td> <?php echo e($c->saldo); ?></td>
        <td> <?php echo e($c->email); ?></td>
        <td><a href="/clientes/detalhes/<?= $c->id ?>">
          <span class="glyphicon glyphicon-search"></span>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>


  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>