<?php $__env->startSection('conteudo'); ?>
  <h1>Nome: <?php echo e($cliente->nome); ?> </h1>
  <ul>
    <li>
      <b>Saldo:</b>  <?php echo e($cliente->saldo); ?>

    </li>
    <li>
      <b>E-mail:</b> <?php echo e($cliente->email); ?>

    </li>
    <li>

    </li>
  </ul>

  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>