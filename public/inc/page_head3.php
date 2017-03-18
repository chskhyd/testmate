<?php
/**
 * page_head.php
 *
 * Author: pixelcave
 *
 * Header and Sidebar of each page
 *
 */
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

    if ($template['main_style'] == 'style-alt')  {
        $page_classes .= (($page_classes == '') ? '' : ' ') . 'style-alt';
    }

    if ($template['footer'] == 'footer-fixed')  {
        $page_classes .= (($page_classes == '') ? '' : ' ') . 'footer-fixed';
    }

    if (!$template['menu_scroll'])  {
        $page_classes .= (($page_classes == '') ? '' : ' ') . 'disable-menu-autoscroll';
    }
?>
<div id="page-container"<?php if ($page_classes) { echo ' class="' . $page_classes . '"'; } ?>>
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
                        <a href="page_ready_user_profile.php">
                           <img src="img/user.png" alt="user">
                        </a>
                    </div>
                    <div class="sidebar-user-name"><?php echo $_SESSION['id'];?></div>
                    
                </div>
               

              
 <!-- ACtvity -->
               
            </div>
            <!-- END Sidebar Content -->
        </div>
        <!-- END Wrapper for scrolling functionality -->
    </div>
    <!-- END Main Sidebar -->

    <!-- Main Container -->
    <div id="main-container">
        <!-- Header -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available header.navbar classes:

            'navbar-default'            for the default light header
            'navbar-inverse'            for an alternative dark header

            'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

            'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
        -->
        <header class="navbar<?php if ($template['header_navbar']) { echo ' ' . $template['header_navbar']; } ?><?php if ($template['header']) { echo ' '. $template['header']; } ?>">
           
            <!-- Left Header Navigation -->
          
           
               
            <!-- END Left Header Navigation -->
<div class="nav navbar-nav-custom pull-right">
    <br>
     <div class="clock" style="margin:0em;"></div>
      
</div><br>
    
<div class="text-left col-sm-offset-1"> 
    <a href="javascript:void(0)" id="quit"  class="quit" > <button data-toggle="tooltip" name="quit"  type="submit" class="btn btn-lg btn-primary"><i class="fa fa-angle-right"></i>Quit Test</button></a>
     <div class=" col-sm-offset-2"><h4> <span class="text-primary">1 =></span> Indicates Question unattempted <br><span class="text-danger">1 => </span> Indicates Question attempted <br><span class="text-success"> 1 =></span> Indicates Marked for review <br></h4>
 </div>
        
         

</div>  

        </header>
        <!-- END Header -->
