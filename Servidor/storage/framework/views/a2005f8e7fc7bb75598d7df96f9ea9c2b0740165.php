<?php $__env->startSection('contenido'); ?>

<h1>Bienvenido</h1>
<p class="lead">Agrega y modifica tus propios autos</p>
<hr>

<a href="<?php echo e(url('data')); ?>" class="btn btn-info">Ver Datos</a>
<a href="<?php echo e(url('data/create')); ?>" class="btn btn-primary">Agregar</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marco/Documentos/programas/php/servidor/resources/views/page/home.blade.php ENDPATH**/ ?>