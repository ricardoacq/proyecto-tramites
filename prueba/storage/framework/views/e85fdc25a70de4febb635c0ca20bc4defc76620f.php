<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    bienvenido <?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->apellidop); ?> <?php echo e(Auth::user()->apellidom); ?>

                    <hr>
                    curp: <?php echo e(Auth::user()->curp); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>