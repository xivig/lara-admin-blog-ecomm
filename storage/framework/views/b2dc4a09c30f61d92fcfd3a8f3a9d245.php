<?php $__env->startSection('title', 'Blog page'); ?>



<?php $__env->startSection('content'); ?>
    <section class="section blog-wrap bg-gray">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <div class="col-lg-6 col-md-6 mb-5">
                        <div class="blog-item">

                            
                            <img loading="lazy" src="<?php echo e($post->image->link); ?>" alt="blog"
                                 class="img-fluid rounded">

                            <div class="blog-item-content bg-white p-4">
                                <div class="blog-item-meta  py-1 px-2">
                                    <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i><?php echo e($post->category->name); ?></span>
                                    <span class="text-black text-capitalize mr-3"><i class="ti-user mr-2"></i><?php echo e($post->user->name); ?></span>
                                    <span class="text-warning text-capitalize mr-3"><i class="ti-crown mr-2"></i><?php echo e($post->tag->name); ?></span>
                                </div>

                                <h3 class="mt-3 mb-3"><a href="<?php echo e(url('blog-post')); ?>"><?php echo e($post->title); ?></a>
                                </h3>
                                <p class="mb-4"><?php echo e($post->excerpt); ?></p>

                                <a href="<?php echo e(url('blog-post')); ?>" class="btn btn-small btn-main btn-round-full">Learn
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
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel_project_all\1\lara-admin-blog-ecomm\resources\views/blog/blog-list.blade.php ENDPATH**/ ?>