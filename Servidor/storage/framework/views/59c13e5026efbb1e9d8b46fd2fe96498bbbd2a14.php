<?php $__env->startSection('contenido'); ?>

<h1>Editar auto - <?php echo e($data->Auto); ?> </h1>
<p class="lead">Edita en la parte de abajo. <a href="<?php echo e(route('data.index')); ?>">Regresar</a></p>
<hr>


<?php echo Form::model($data, [
    'method' => 'PATCH',
    'route' => ['data.update', $data->id]
]); ?>


<div class="form-group">
    <?php echo Form::label('Auto', 'Auto:', ['class' => 'control-label']); ?>

    <?php echo Form::text('Auto', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('kilometraje', 'Kilometraje:', ['class' => 'control-label']); ?>

    <?php echo Form::number('kilometraje', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('Descripcion', 'Descripcion:', ['class' => 'control-label']); ?>

    <?php echo Form::textarea('Descripcion', null, ['class' => 'form-control']); ?>

</div>

<?php echo Form::submit('Actualizar', ['class' => 'btn btn-primary']); ?>


<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marco/Documentos/programas/php/servidor/resources/views/data/editar.blade.php ENDPATH**/ ?>