
<?php $__env->startSection('title', 'Blog page'); ?>



<?php $__env->startSection('content'); ?>
<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Our blog</span>
          <h1 class="text-capitalize mb-4 text-lg">Blog articles</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="<?php echo e(url('/')); ?>" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item text-white-50">Our blog</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section blog-wrap bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<div class="col-lg-6 col-md-6 mb-5">
						<div class="blog-item">
							<img loading="lazy" src="<?php echo e(asset('xivig-blog/images/blog/1.jpg')); ?>" alt="blog" class="img-fluid rounded">

							<div class="blog-item-content bg-white p-4">
								<div class="blog-item-meta  py-1 px-2">
									<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
								</div>

								<h3 class="mt-3 mb-3"><a href="<?php echo e(url('blog-post')); ?>">Improve design with typography?</a></h3>
								<p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium
									pariatur repudiandae!</p>

								<a href="<?php echo e(url('blog-post')); ?>" class="btn btn-small btn-main btn-round-full">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 mb-5">
						<div class="blog-item">
							<img loading="lazy" src="<?php echo e(asset('xivig-blog/images/blog/2.jpg')); ?>" alt="blog" class="img-fluid rounded">

							<div class="blog-item-content bg-white p-4">
								<div class="blog-item-meta  py-1 px-2">
									<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
								</div>

								<h3 class="mt-3 mb-3"><a href="<?php echo e(url('blog-post')); ?>">Improve design with typography?</a></h3>
								<p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium
									pariatur repudiandae!</p>

								<a href="<?php echo e(url('blog-post')); ?>" class="btn btn-small btn-main btn-round-full">Learn More</a>
							</div>
						</div>
					</div>

                    <div class="col-lg-6 col-md-6 mb-5">
						<div class="blog-item">
							<img loading="lazy" src="<?php echo e(asset('xivig-blog/images/blog/3.jpg')); ?>" alt="blog" class="img-fluid rounded">

							<div class="blog-item-content bg-white p-4">
								<div class="blog-item-meta  py-1 px-2">
									<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
								</div>

								<h3 class="mt-3 mb-3"><a href="<?php echo e(url('blog-post')); ?>">Improve design with typography?</a></h3>
								<p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium
									pariatur repudiandae!</p>

								<a href="<?php echo e(url('blog-post')); ?>" class="btn btn-small btn-main btn-round-full">Learn More</a>
							</div>
						</div>
					</div>
                    <div class="col-lg-6 col-md-6 mb-5">
						<div class="blog-item">
							<img loading="lazy" src="<?php echo e(asset('xivig-blog/images/blog/4.jpg')); ?>" alt="blog" class="img-fluid rounded">

							<div class="blog-item-content bg-white p-4">
								<div class="blog-item-meta  py-1 px-2">
									<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
								</div>

								<h3 class="mt-3 mb-3"><a href="<?php echo e(url('blog-post')); ?>">Improve design with typography?</a></h3>
								<p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium
									pariatur repudiandae!</p>

								<a href="<?php echo e(url('blog-post')); ?>" class="btn btn-small btn-main btn-round-full">Learn More</a>
							</div>
						</div>
					</div>


					<div class="col-lg-12 mt-3">
						<nav class="navigation pagination py-2 d-inline-block">
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
			<div class="col-lg-4 mt-5 mt-lg-0">
				<div class="sidebar-wrap">
					<div class="sidebar-widget search card p-4 mb-3 border-0">
						<input type="text" class="form-control" placeholder="search">
						<a href="#" class="btn btn-mian btn-small d-block mt-2">search</a>
					</div>

					<div class="sidebar-widget card border-0 mb-3">
						<img loading="lazy" src="<?php echo e(asset('xivig-blog/images/blog/blog-author.jpg')); ?>" alt="blog-author" class="img-fluid">
						<div class="card-body p-4 text-center">
							<h5 class="mb-0 mt-4">Arther Conal</h5>
							<p>Digital Marketer</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, dolore.</p>

							<ul class="list-inline author-socials">
								<li class="list-inline-item mr-3">
									<a href="#"><i class="fab fa-facebook-f text-muted"></i></a>
								</li>
								<li class="list-inline-item mr-3">
									<a href="#"><i class="fab fa-twitter text-muted"></i></a>
								</li>
								<li class="list-inline-item mr-3">
									<a href="#"><i class="fab fa-linkedin-in text-muted"></i></a>
								</li>
								<li class="list-inline-item mr-3">
									<a href="#"><i class="fab fa-pinterest text-muted"></i></a>
								</li>
								<li class="list-inline-item mr-3">
									<a href="#"><i class="fab fa-behance text-muted"></i></a>
								</li>
							</ul>
						</div>
					</div>

					<div class="sidebar-widget latest-post card border-0 p-4 mb-3">
						<h5>Latest Posts</h5>

						<div class="media border-bottom py-3">
							<a href="#"><img loading="lazy" class="mr-4" src="<?php echo e(asset('xivig-blog/images/blog/bt-3.jpg')); ?>" alt="blog"></a>
							<div class="media-body">
								<h6 class="my-2"><a href="#">Thoughtful living in los Angeles</a></h6>
								<span class="text-sm text-muted">03 Mar 2018</span>
							</div>
						</div>

						<div class="media border-bottom py-3">
							<a href="#"><img loading="lazy" class="mr-4" src="<?php echo e(asset('xivig-blog/images/blog/bt-2.jpg')); ?>" alt="blog"></a>
							<div class="media-body">
								<h6 class="my-2"><a href="#">Vivamus molestie gravida turpis.</a></h6>
								<span class="text-sm text-muted">03 Mar 2018</span>
							</div>
						</div>

						<div class="media py-3">
							<a href="#"><img loading="lazy" class="mr-4" src="<?php echo e(asset('xivig-blog/images/blog/bt-1.jpg')); ?>" alt="blog"></a>
							<div class="media-body">
								<h6 class="my-2"><a href="#">Fusce lobortis lorem at ipsum semper sagittis</a></h6>
								<span class="text-sm text-muted">03 Mar 2018</span>
							</div>
						</div>
					</div>

					<div class="sidebar-widget bg-white rounded tags p-4 mb-3">
						<h5 class="mb-4">Tags</h5>

						<a href="#">Web</a>
						<a href="#">agency</a>
						<a href="#">company</a>
						<a href="#">creative</a>
						<a href="#">html</a>
						<a href="#">Marketing</a>
						<a href="#">Social Media</a>
						<a href="#">Branding</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\0.ProjectAll\laravel_all\lara-admin-blog-ecomm\resources\views/blog/blog-content.blade.php ENDPATH**/ ?>