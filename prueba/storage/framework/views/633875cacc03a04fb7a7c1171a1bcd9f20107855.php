<?php $__env->startSection('content'); ?>
<form action="" method="POST" class="col-xs-8">
		
		<label for="">Nombre:</label>	<br>
		<span class="label label-success" value=""><?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->apellidop); ?> <?php echo e(Auth::user()->apellidom); ?></span><br>
		

			<label for="">Correo:</label><br>
		<span class="label label-success" value=""><?php echo e(Auth::user()->email); ?></span><br>

			<label for="">Curp:</label><br>
		<span class="label label-success" value=""><?php echo e(Auth::user()->curp); ?></span><br>

	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>