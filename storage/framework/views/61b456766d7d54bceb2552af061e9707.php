<?php echo $__env->make('blog.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('blog.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if(($title ?? '') !== 'Home page'): ?>
    <?php echo $__env->make('blog.partials.common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('blog.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH F:\laravel_project_all\1\lara-admin-blog-ecomm\resources\views/home.blade.php ENDPATH**/ ?>