<?php echo $__env->make('blog.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('blog.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('blog.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\0.ProjectAll\laravel_all\lara-admin-blog-ecomm\resources\views/blog.blade.php ENDPATH**/ ?>