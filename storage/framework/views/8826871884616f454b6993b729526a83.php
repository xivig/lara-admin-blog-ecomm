

<?php $__env->startSection('title', 'Xivig User registration '); ?>

<?php $__env->startSection('content'); ?>

    <!-- ============================================================== -->
    <!-- Registration -->
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center"
         style="background:url(<?php echo e(asset('user/assets/images/big/auth-bg.jpg')); ?>) no-repeat center center;">
        <div class="auth-box">
            <div>
                <div class="logo">
                    <span class="db"><img src="<?php echo e(asset('user/assets/images/logo-icon.png')); ?>" alt="logo"/></span>
                    <h5 class="font-medium m-b-20">Sign Up to New User</h5>
                </div>
                <!-- Form -->
                <div class="row">
                    <div class="col-12">
                        <form class="form-horizontal m-t-20" action="<?php echo e(route('register.post')); ?>" method="post">
                            <?php echo csrf_field(); ?>

                            <?php $__sessionArgs = ['error'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo e($value); ?>

                            </div>
                            <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>
                            <div class="form-group row ">
                                <div class="col-12 ">
                                    <input name="name"  class="form-control  form-control-lg" type="text" required=" "
                                           placeholder="Name">
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger" role="alert">
                          <strong><?php echo e($message); ?></strong>
                      </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 ">
                                    <input name="email" class="form-control form-control-lg" type="text" required=" "
                                           placeholder="Email">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger" role="alert">
                          <strong><?php echo e($message); ?></strong>
                      </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 ">
                                    <input name="password" class="form-control form-control-lg" type="password" required=" "
                                           placeholder="Password">
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                      </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 ">
                                    <input name="password" class="form-control form-control-lg" type="password" required=" "
                                           placeholder="Confirm Password">
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger" role="alert">
                          <strong><?php echo e($message); ?></strong>
                      </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 ">
                                    <div class="custom-control custom-checkbox">
                                        <input name="agree" type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">I agree to all <a
                                                href="javascript:void(0)">Terms</a></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center ">
                                <div class="col-xs-12 p-b-20 ">
                                    <button class="btn btn-block btn-lg btn-info " type="submit">SIGN UP</button>
                                </div>
                            </div>
                            <div class="form-group m-b-0 m-t-10 ">
                                <div class="col-sm-12 text-center ">
                                    Already have an account? <a href="<?php echo e(route('login')); ?>"
                                                                class="text-info m-l-5 "><b>Sign In</b></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Registration -->
    <!-- ============================================================== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\0.ProjectAll\laravel_all\lara-admin-blog-ecomm\resources\views/auth/register.blade.php ENDPATH**/ ?>