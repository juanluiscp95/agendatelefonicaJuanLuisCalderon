

<?php $__env->startSection('titulo','Confirme la eliminacion del registro'); ?>


<?php $__env->startSection('contenido'); ?>
<div class="container py-5">
    <h1>¿Deseas eliminar el registro de <?php echo e($Agenda->nombres); ?> <?php echo e($Agenda->apellidos); ?>?</h1>

<form method="POST" action="<?php echo e(route('agenda.destroy', $Agenda->id)); ?>">
    <?php echo method_field('DELETE'); ?>
    <?php echo csrf_field(); ?>
    <button type="submit" class="redondo btn btn-danger">
        <i class="fas fa-trash-alt"></i>Eliminar
    </button>
    <a class="redondo btn btn-secondary" href="<?php echo e(route('cancelar')); ?>">
        <i class="fas fa-ban"></i>Cancelar
    </a>
</form>

</div>

<?php echo $__env->make('plantilla.footer',['container'=>'container'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel6\agendatelefonica\resources\views/agenda/confirm.blade.php ENDPATH**/ ?>