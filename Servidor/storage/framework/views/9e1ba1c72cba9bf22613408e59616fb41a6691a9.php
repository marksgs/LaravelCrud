<?php $__env->startSection('contenido'); ?>

<h1>Lista de autos</h1>
<p class="lead">Datos <a href="<?php echo e(route('data.create')); ?>">¿Agregar nuevo?</a></p>
<hr>

<?php $__currentLoopData = $datos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dato_auto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h3> <?php echo e($dato_auto->Auto); ?> </h3>
    <p> <?php echo e($dato_auto->kilometraje); ?> </p>
    <p> <?php echo e($dato_auto->Descripcion); ?> </p>
    <p>
        <a href="<?php echo e(route('data.show', $dato_auto->id)); ?>" class="btn btn-info">Ver auto</a>
        <a href="<?php echo e(route('data.edit', $dato_auto->id)); ?>" class="btn btn-primary">Editar</a>
    </p>
    <hr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marco/Documentos/programas/php/servidor/resources/views/data/index.blade.php ENDPATH**/ ?>