<?php $__env->startSection('title', 'Xivig User registration '); ?>

<?php $__env->startSection('content'); ?>

    <!-- ============================================================== -->
    <!-- dashboard -->
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center"
         >
        <main>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
        <div class="row">
            <div class="col-md-11">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <img src="<?php echo e(asset('user/assets/images/favicon.png')); ?>" alt="BootstrapBrain Logo" width="16">
                </a>
            </div>
            <div class="col-md-1">
                <a class="btn btn-danger btn-lg dropdown-item" href="<?php echo e(route('logout')); ?>"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    <?php echo e(__('Logout')); ?>

                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="GET" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </div>

    </header>

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
        <p class="col-md-8 fs-4">Welcome to dashboard.<br/>Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <button class="btn btn-primary btn-lg" type="button">Dashboard</button>
      </div>
    </div>

  </div>
</main>
    </div>
    <!-- ============================================================== -->
    <!-- dashboard -->
    <!-- ============================================================== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel_project_all\1\lara-admin-blog-ecomm\resources\views/auth/dashboard.blade.php ENDPATH**/ ?>