<nav class="navbar navbar-light">
  <a href="<?php echo e(route('agenda.index')); ?>" class="navbar-brand"><img id="icono" class="img-responsive" 
    src="https://imge.apk.tools/300/d/3/1/com.widesoft.guiatelefonica.png"></a>

  <ul class="nav flex-column text-center">
  <li class="nav-item">
    <span class="nav-link active">Bienvenido <?php echo e(Auth::user()->name); ?></span>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); 
    document.getElementById('logout-form').submit();">Cerrar sesión</a>

    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
    <?php echo csrf_field(); ?>
    </form>
  </li>
</ul>

</nav>



<?php /**PATH C:\laragon\www\laravel6\agendatelefonica\resources\views/agenda/navuser.blade.php ENDPATH**/ ?>