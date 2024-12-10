
<?php $__env->startSection('title', 'Blog page'); ?>



<?php $__env->startSection('content'); ?>
    <section class="section blog-wrap bg-gray">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="blog-item">
                        <img loading="lazy" src="<?php echo e(asset('xivig-blog/images/blog/1.jpg')); ?>" alt="blog"
                             class="img-fluid rounded">

                        <div class="blog-item-content bg-white p-4">
                            <div class="blog-item-meta  py-1 px-2">
                                <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
                            </div>

                            <h3 class="mt-3 mb-3"><a href="<?php echo e(url('blog-post')); ?>">Improve design with typography?</a>
                            </h3>
                            <p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur
                                accusantium
                                pariatur repudiandae!</p>

                            <a href="<?php echo e(url('blog-post')); ?>" class="btn btn-small btn-main btn-round-full">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="blog-item">
                        <img loading="lazy" src="<?php echo e(asset('xivig-blog/images/blog/2.jpg')); ?>" alt="blog"
                             class="img-fluid rounded">

                        <div class="blog-item-content bg-white p-4">
                            <div class="blog-item-meta  py-1 px-2">
                                <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
                            </div>

                            <h3 class="mt-3 mb-3"><a href="<?php echo e(url('blog-post')); ?>">Improve design with typography?</a>
                            </h3>
                            <p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur
                                accusantium
                                pariatur repudiandae!</p>

                            <a href="<?php echo e(url('blog-post')); ?>" class="btn btn-small btn-main btn-round-full">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="blog-item">
                        <img loading="lazy" src="<?php echo e(asset('xivig-blog/images/blog/3.jpg')); ?>" alt="blog"
                             class="img-fluid rounded">

                        <div class="blog-item-content bg-white p-4">
                            <div class="blog-item-meta  py-1 px-2">
                                <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
                            </div>

                            <h3 class="mt-3 mb-3"><a href="<?php echo e(url('blog-post')); ?>">Improve design with typography?</a>
                            </h3>
                            <p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur
                                accusantium
                                pariatur repudiandae!</p>

                            <a href="<?php echo e(url('blog-post')); ?>" class="btn btn-small btn-main btn-round-full">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="blog-item">
                        <img loading="lazy" src="<?php echo e(asset('xivig-blog/images/blog/4.jpg')); ?>" alt="blog"
                             class="img-fluid rounded">

                        <div class="blog-item-content bg-white p-4">
                            <div class="blog-item-meta  py-1 px-2">
                                <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
                            </div>

                            <h3 class="mt-3 mb-3"><a href="<?php echo e(url('blog-post')); ?>">Improve design with typography?</a>
                            </h3>
                            <p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur
                                accusantium
                                pariatur repudiandae!</p>

                            <a href="<?php echo e(url('blog-post')); ?>" class="btn btn-small btn-main btn-round-full">Learn More</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-lg-6 text-center">
                    <nav class="navigation pagination d-inline-block">
                        <div class="nav-links">
                            <a class="prev page-numbers" href="#">Prev</a>
                            <span aria-current="page" class="page-numbers current">1</span>
                            <a class="page-numbers" href="#">2</a>
                            <a class="next page-numbers" href="#">Next</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\0.ProjectAll\laravel_all\lara-admin-blog-ecomm\resources\views/blog/blog-list.blade.php ENDPATH**/ ?>