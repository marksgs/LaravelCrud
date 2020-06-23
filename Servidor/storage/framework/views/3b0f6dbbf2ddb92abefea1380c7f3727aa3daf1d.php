<?php $__env->startSection('contenido'); ?>

<h1><?php echo e($data->Auto); ?></h1>
<p class="lead">
<?php echo e($data->kilometraje); ?> <br>
<?php echo e($data->Descripcion); ?>

</p>
<hr>

<a href="<?php echo e(route('data.index')); ?>" class="btn btn-info">Volver</a>
<a href="<?php echo e(route('data.edit', $data->id)); ?>" class="btn btn-primary">Editar</a>

<div class="pull-right">
<?php echo Form::open([
            'method' => 'DELETE',
            'route' => ['data.destroy', $data->id]
        ]); ?>

            <?php echo Form::submit('Eliminar', ['class' => 'btn btn-danger']); ?>

        <?php echo Form::close(); ?>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marco/Documentos/programas/php/servidor/resources/views/data/mostrar.blade.php ENDPATH**/ ?>