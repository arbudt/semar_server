<!-- Logo -->
<a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">SMARS</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>SMARS</b></span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <?php $this->load->view('view_notifications'); ?>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <?php $this->load->view('view_user_header'); ?>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <!--            <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>-->
        </ul>
    </div>
</nav>