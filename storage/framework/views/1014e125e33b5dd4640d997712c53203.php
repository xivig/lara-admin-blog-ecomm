<?php $__env->startSection('title', 'Contact Us'); ?>
<?php $__env->startSection('page-title', 'Contact Us'); ?>
<?php $__env->startSection('page-heading', 'Get in Touch'); ?>
<?php $__env->startSection('content'); ?>

<!-- contact form start -->
<section class="contact-form-wrap section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12">
				<form id="contact-form" class="contact__form" method="post" action="index.html">
					<h3 class="text-md mb-4">Contact Form</h3>
					<div class="form-group">
						<input name="name" type="text" class="form-control" placeholder="Your Name" required>
					</div>
					<div class="form-group">
						<input name="email" type="email" class="form-control" placeholder="Email Address" required>
					</div>
					<div class="form-group-2 mb-4">
						<textarea name="message" class="form-control" rows="4" placeholder="Your Message" required></textarea>
					</div>
					<button class="btn btn-main" name="submit" type="submit">Send Message</button>
				</form>
			</div>

			<div class="col-lg-5 col-sm-12">
				<div class="contact-content pl-lg-5 mt-5 mt-lg-0">
					<span class="text-muted">We are Professionals</span>
					<h2 class="mb-5 mt-2">Don’t Hesitate to contact with us for any kind of information</h2>

					<ul class="address-block list-unstyled">
						<li>
							<i class="ti-direction mr-3"></i>North Main Street,Brooklyn Australia
						</li>
						<li>
							<i class="ti-email mr-3"></i>Email: contact@mail.com
						</li>
						<li>
							<i class="ti-mobile mr-3"></i>Phone:+88 01672 506 744
						</li>
					</ul>

					<ul class="social-icons list-inline mt-5">
						<li class="list-inline-item">
							<a href="http://www.themefisher.com"><i class="fab fa-facebook-f"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="http://www.themefisher.com"><i class="fab fa-twitter"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="http://www.themefisher.com"><i class="fab fa-linkedin-in"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="google-map">
	<div id="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/marker.png" data-marker-name="Megakit"></div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\0.ProjectAll\laravel_all\lara-admin-blog-ecomm\resources\views/home/contact.blade.php ENDPATH**/ ?>