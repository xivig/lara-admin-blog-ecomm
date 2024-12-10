<!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Personal</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Dashboard </span>
                                <span class="badge badge-pill badge-info ml-auto m-r-15">2</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="<?php echo e(route('user-profile')); ?>" class="sidebar-link">
                                        <i class="ti-user"></i>
                                        <span class="hide-menu"> User Profile </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo e(route('user-setting')); ?>" class="sidebar-link">
                                        <i class="ti-settings"></i>
                                        <span class="hide-menu"> User Setting </span>
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="sidebar-item">
                            <a class="btn btn-danger btn-lg dropdown-item sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off m-r-5 m-l-5"></i>
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="GET" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>




                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
<?php /**PATH D:\0.ProjectAll\laravel_all\lara-admin-blog-ecomm\resources\views/user/sidebar.blade.php ENDPATH**/ ?>