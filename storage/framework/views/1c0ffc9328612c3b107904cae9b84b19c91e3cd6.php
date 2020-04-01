

<?php $__env->startSection('titulo','Agenda'); ?>

<?php $__env->startSection('contenido'); ?>

<div class="container-fluid registerinicio">
                <div class="row">
                    <div class="col-md-6 register-left register-left1">
                        <img src="http://www.idaipqroo.org.mx/wp-content/uploads/2018/06/proteccion-de-datos-personales-791x1024.png" alt=""/>
                    </div>    
                    <div class="col-md-6 register-left">
                        
                        <h3>Bienvenid@</h3>
                        <p>Por favor llena los datos correctamente en el sistema!</p>
                        
                    </div>    
                </div>
</div>



<div class="container-fluid ">


<?php if(session('datos')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo e(session('datos')); ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>

<?php if(session('cancelar')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?php echo e(session('cancelar')); ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>


 <br>


<?php echo $__env->make('agenda.navuser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"><a href="<?php echo e(route('agenda.index')); ?>">Inicio</a></li>
  </ol>
</nav>

<nav class="navbar navbar-light float-right">
  <form class="form-inline">

  <select name="tipo" class="form-control" id="exampleFormControlSelect1">
      <option>Buscar por tipo</option>
      <option>nombres</option>
      <option>apellidos</option>
      <option>telefono</option>
      <option>celular</option>
      <option>email</option>
    </select>

    <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">

    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>

   <br>
      <h1 class="text-center">Datos personales</h1>

      <br>
<div class="row float-right">
    <a  href="<?php echo e(route('agenda.create')); ?>" class="btn btn-info btncolorblanco"><i class="fas fa-user-plus"></i> Agregar un nuevo Registro</a>
</div>
   <br>

<?php echo e($Agenda); ?>


<table class="table-responsive table text-center">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Nombres y apellidos</th>
                                                  <th scope="col">Telefono</th>
                                                  <th scope="col">Celular</th>
                                                  <th scope="col">Sexo</th>
                                                  <th scope="col">Email</th>
                                                  <th scope="col">Posición</th>
                                                  <th scope="col">Departamento</th>
                                                  <th scope="col">Salario</th>
                                                  <th scope="col">Fecha de nacimiento</th>
                                                  <th scope="col">Acción</th>
                                              
                                                </tr>
                                              </thead>
                                              <tbody>
                                              <?php $__currentLoopData = $Agenda; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Agendaitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                  <th scope="row"><?php echo e($Agendaitem->id); ?></th>
                                                  <td><a href="<?php echo e(route('agenda.show',$Agendaitem->id)); ?>">
                                                  <?php echo e($Agendaitem->nombres); ?> <?php echo e($Agendaitem->apellidos); ?></a></td>
                                                  <td><?php echo e($Agendaitem->telefono); ?></td>
                                                  <td><?php echo e($Agendaitem->celular); ?></td>
                                                  <td><?php echo e($Agendaitem->sexo); ?></td>
                                                  <td><?php echo e($Agendaitem->email); ?></td>
                                                  <td><?php echo e($Agendaitem->posicion); ?></td>
                                                  <td><?php echo e($Agendaitem->departamento); ?></td>
                                                  <td><?php echo e($Agendaitem->salario); ?></td>
                                                  <td><?php echo e($Agendaitem->fechadenacimiento); ?></td>
                                                  <td><a href="<?php echo e(route('agenda.edit',$Agendaitem->id)); ?>" class="btn btn-success btncolorblanco">
                                                        <i class="fa fa-edit"></i> Editar 
                                                      </a>

                                                      <a href="<?php echo e(route('agenda.confirm',$Agendaitem->id)); ?>" class="btn btn-danger btncolorblanco">
                                                        <i class="fa fa-trash-alt"></i> Eliminar 
                                                      </a>
                                                  </td>
                                                  
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                              </tbody>
                                            </table>
<!--<?php echo e($Agenda->appends($_GET)->links()); ?>--> <!-- diferentes formas de hacer que al cambiar el paginador no se reinicie la busqueda del buscador -->
<?php echo e($Agenda->links()); ?>


</div>


<?php echo $__env->make('plantilla.footer',['container'=>'container-fluid'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel6\agendatelefonica\resources\views/agenda/index.blade.php ENDPATH**/ ?>