<?php

?>

<!-- Preloader -->
<!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
<!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in body element (HTML version) -->
<div class="preloader themed-background">
    <h1 class="push-top-bottom text-light text-center"><strong>Testmate</strong></h1>
    <div class="inner">
        <h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>Loading..</strong></h3>
        <div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
    </div>
</div>

<?php
$page_classes = '';

if ($template['header'] == 'navbar-fixed-top') {
    $page_classes = 'header-fixed-top';
} else if ($template['header'] == 'navbar-fixed-bottom') {
    $page_classes = 'header-fixed-bottom';
}

if ($template['sidebar']) {
    $page_classes .= (($page_classes == '') ? '' : ' ') . $template['sidebar'];
}

if ($template['main_style'] == 'style-alt') {
    $page_classes .= (($page_classes == '') ? '' : ' ') . 'style-alt';
}

if ($template['footer'] == 'footer-fixed') {
    $page_classes .= (($page_classes == '') ? '' : ' ') . 'footer-fixed';
}

if (!$template['menu_scroll']) {
    $page_classes .= (($page_classes == '') ? '' : ' ') . 'disable-menu-autoscroll';
}
?>
<div id="page-container"<?php if ($page_classes) {
    echo ' class="' . $page_classes . '"';
} ?>>
    <!-- Alternative Sidebar -->
    
    <!-- END Alternative Sidebar -->

    <!-- Main Sidebar -->
    <div id="sidebar">
        <!-- Wrapper for scrolling functionality -->
        <div class="sidebar-scroll">
            <!-- Sidebar Content -->
            <div class="sidebar-content">
                <!-- Brand -->
                <a href="javascript:void(0)" class="sidebar-brand">
                    <i class="gi gi-flash"></i><strong>Testmate</strong>
                </a>
                <!-- END Brand -->
               
                <!-- User Info -->
                <div class="sidebar-section sidebar-user clearfix">
                    <div class="sidebar-user-avatar">
                        <a href="">
                            <img src="img/user.png" alt="user">
                        </a>
                    </div>
                    <div class="sidebar-user-name">Hi admin
                        <div class="sidebar-user-links">
                            <a href="<?php echo URL; ?>adminHome" data-toggle="tooltip" data-placement="bottom" title="Home"><i class="gi gi-home"></i></a>

                            <a href="<?php echo URL; ?>logout" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                        </div>

                    </div>

                </div>
                <!-- END User Info -->




            </div>
            <!-- END Sidebar Content -->
        </div>
        <!-- END Wrapper for scrolling functionality -->
    </div>
    <!-- END Main Sidebar -->

    <!-- Main Container -->
    <div id="main-container">
       
      
        <header class="navbar<?php if ($template['header_navbar']) {
    echo ' ' . $template['header_navbar'];
} ?><?php if ($template['header']) {
    echo ' ' . $template['header'];
} ?>">

                <!-- Left Header Navigation -->
                <ul class="nav navbar-nav-custom">
             
                
                    <li>
                         <div class="error-options">
                <h3><i class="fa fa-chevron-circle-left text-muted"></i> <a href=<?php echo URL;?>adminHome>Go Back</a></h3>
            </div>
                    </li>
                </ul>
                <!-- END Left Header Navigation -->



                <!-- Right Header Navigation -->
                <ul class="nav navbar-nav-custom pull-right">
                    <!-- Alternative Sidebar Toggle Button -->

                    <!-- END Alternative Sidebar Toggle Button -->

                    <!-- User Dropdown -->
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="img/user.png" alt="user"> <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                            <li class="dropdown-header text-center">Account</li>

                            <li class="divider"></li>
                            <li>

                                <a href="<?php echo URL; ?>logout"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                            </li>

                        </ul>
                    </li>
                    <!-- END User Dropdown -->
                </ul>
                <!-- END Right Header Navigation -->

        </header>
        <!-- END Header -->
