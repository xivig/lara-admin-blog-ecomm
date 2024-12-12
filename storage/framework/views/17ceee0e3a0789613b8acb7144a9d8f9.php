<?php use \Illuminate\Support\Str; ?>

<?php $__env->startSection('title', 'Blog page'); ?>



<?php $__env->startSection('content'); ?>
    <section class="section blog-wrap bg-gray">
        <div class="container">
            <?php if(count($posts)> 0): ?>
                <div class="row">
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="col-lg-6 col-md-6 mb-5">
                            <div class="blog-item">

                                <img loading="lazy" src="<?php echo e($post->image->link); ?>" alt="blog"
                                     class="img-fluid rounded">

                                <div class="blog-item-content bg-white p-4">
                                    <div class="blog-item-meta  py-1 px-2">
                                        <span class="text-primary text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i><?php echo e($post->category->name); ?></span>
                                        <span class="text-danger text-capitalize mr-3"><i class="ti-user mr-2"></i><?php echo e($post->user ? $post->user->name : ''); ?></span>
                                        <span class="text-warning text-capitalize mr-3"><i class="ti-bookmark mr-2"></i><?php echo e($post->tag->name); ?></span>
                                        <span class="text-success text-capitalize mr-3"><i class="ti-crown mr-2"></i><?php echo e($post->author->nickname ?? ''); ?></span>
                                    </div>

                                    <h3 class="mt-3 mb-3"><a
                                            href="<?php echo e(route('single-post', $post->slug)); ?>"><?php echo e(Str::limit($post->title, 20, '...')); ?></a>
                                    </h3>
                                    <p class="mb-4"><?php echo e(Str::limit($post->excerpt, 50, '...')); ?></p>

                                    <a href="<?php echo e(route('single-post', $post->slug)); ?>"
                                       class="btn btn-small btn-main btn-round-full">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-6 text-center">

                        <nav class="navigation pagination d-inline-block">
                            <div class="nav-links">

                                
                                
                                
                                <?php echo e($posts->links()); ?>

                                
                            </div>
                        </nav>
                    </div>
                </div>
            <?php else: ?>
                <div class="text-center text-warning">
                    <h3>No post Found</h3>
                </div>

            <?php endif; ?>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\0.ProjectAll\laravel_all\lara-admin-blog-ecomm\resources\views/blog/blog-list.blade.php ENDPATH**/ ?>