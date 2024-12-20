<body>

<!-- Header Start -->
<header class="navigation">
    <div class="header-top ">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-2 col-md-4">
                    <div class="header-top-socials text-center text-lg-left text-md-left">
                        <a href="https://www.facebook.com/xivig" aria-label="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/xivig" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://github.com/xivig/" aria-label="github"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
                    <div class="header-top-info mb-2 mb-md-0">
                        <a href="tel:+23-345-67890">Call Us : <span>+23-345-67890</span></a>
                        <a href="mailto:support@gmail.com"><i class="fas fa-envelope mr-2"></i><span>support@gmail.com</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="navbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg px-0 py-4">
                        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                            Xivig
                        </a>

                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fa fa-bars"></span>
                        </button>

                        <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a>
                                </li>
                                 <li class="nav-item @contact"><a class="nav-link" href="<?php echo e(url('/about')); ?>">About</a></li>
                                <li class="nav-item dropdown @about">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product <i class="fas fa-chevron-down small"></i></a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                        <li><a class="dropdown-item @company" href="<?php echo e(url('/about')); ?>">Our company</a></li>
                                        <li><a class="dropdown-item @pricing" href="<?php echo e(url('/pricing')); ?>">Pricing</a></li>

                                        <li class="dropdown dropdown-submenu dropright">
                                            <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

                                            <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                                                <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                                                <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item @service"><a class="nav-link" href="<?php echo e(url('/services')); ?>">Services</a></li>
                                <li class="nav-item @project"><a class="nav-link" href="<?php echo e(url('/project')); ?>">Portfolio</a></li>
                                <li class="nav-item dropdown @blog">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i class="fas fa-chevron-down small"></i></a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown05">
                                        <li><a class="dropdown-item @blogGrid" href="<?php echo e(url('/blog-list')); ?>">Blog Grid</a></li>
                                        <li><a class="dropdown-item @blogSidebar" href="<?php echo e(url('/blog')); ?>">Blog with Sidebar</a></li>
                                        <li><a class="dropdown-item @blogSingle" href="<?php echo e(url('/blog-post')); ?>">Blog Single</a></li>

                                        <li class="dropdown dropdown-submenu dropleft">
                                            <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

                                            <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                                                <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                                                <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item @contact"><a class="nav-link" href="<?php echo e(url('/contact')); ?>">Contact</a></li>
                            </ul>

                            <div class="my-2 my-md-0 ml-lg-4 text-center">
                                <a href="<?php echo e(url('/contact')); ?>" class="btn btn-solid-border btn-round-full">Get a Quote</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Close -->

<?php /**PATH D:\0.ProjectAll\laravel_all\lara-admin-blog-ecomm\resources\views/blog/partials/header.blade.php ENDPATH**/ ?>