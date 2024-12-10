<?php $__env->startSection('title', 'Xivig User registration '); ?>

<?php $__env->startSection('content'); ?>

    <!-- ============================================================== -->
    <!-- dashboard -->
    <!-- ============================================================== -->


    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">

            <?php $__sessionArgs = ['success'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
            <div class="alert alert-success" role="alert">
                <?php echo e($value); ?>

            </div>
            <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>

            <h1 class="display-5 fw-bold">Hi, <?php echo e(auth()->user()->name); ?></h1>
            <h2>Welcome to dashboard</h2>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- dashboard -->
    <!-- ============================================================== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\0.ProjectAll\laravel_all\lara-admin-blog-ecomm\resources\views/auth/dashboard.blade.php ENDPATH**/ ?>