<?php $__env->startSection('contenido'); ?>

<h1>Agregar datos</h1>
<p class="lead">Agrega los datos en la parte de abajo</p>
<hr>

<?php echo Form::open([
    'route' => 'data.store'
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
    <?php echo Form::label('Descripcion', 'Description del auto:', ['class' => 'control-label']); ?>

    <?php echo Form::textarea('Descripcion', null, ['class' => 'form-control']); ?>

</div>

<?php echo Form::submit('Enviar', ['class' => 'btn btn-primary']); ?>


<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marco/Documentos/programas/php/servidor/resources/views/data/crear.blade.php ENDPATH**/ ?>