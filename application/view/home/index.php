<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>



  <div class="text-center">
     <?php  if(!empty($suc)){ echo '<h2 class="text-success">Registration successfully completed!! Login here..<br>';
     
           
                 
                  } 
             else if(!empty($error)){
                 echo '<h2 class="text-success">Invalid Credentials!! Please Try again..<br>';
                 
             }   else if(!empty($exist)){
                 echo '<h2 class="text-success">Account Already Exist!! Please Login .. <br>';
                 
             }  ?>
    
    </div>
<!-- Login Background -->
<div id="login-background">
    <!-- For best results use an image with a resolution of 2560x400 pixels (prefer a blurred image for smaller file size) -->
    <img src="img/placeholders/headers/login_header.jpg" alt="Login Background" class="animation-pulseSlow">
</div>
<!-- END Login Background -->
     
<!-- Login Container -->

  
            
<div id="login-container" class="animation-fadeIn">
    <!-- Login Title -->
    <div class="login-title text-center">
        
        <h1><i class="gi gi-flash"></i> <strong><?php echo $template['name']; ?></strong><br><small>Please <strong>Login</strong> or <strong>Register</strong></small></h1>
    </div>
    <!-- END Login Title -->

    <!-- Login Block -->
    <div class="block push-bit">
        <!-- Login Form -->
        <form action="" method="post" id="form-login" class="form-horizontal form-bordered form-control-borderless">
            
        
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
                        <input type="text" id="login-id" name="login-id" class="form-control input-lg" placeholder="Student ID">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                        <input type="password" id="login-password" name="login-password" class="form-control input-lg" placeholder="Password">
                    </div>
                </div>
            </div>
            <div class="form-group form-actions">
                
                <div class="col-xs-8 text-right">
                    <button  name="signin" type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Login to Dashboard</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 text-center">
                   
                    <a href="javascript:void(0)" id="link-register-login"><small>Create a new account</small></a>
                </div>
            </div>
        </form>
        <!-- END Login Form -->

        

        <!-- Register Form -->
        <form action="#form-login" method="post" id="form-register" class="form-horizontal form-bordered form-control-borderless display-none">
            <div class="form-group">
                <div class="col-xs-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-user"></i></span>
                        <input type="text" id="register-firstname" name="register-firstname" class="form-control input-lg" placeholder="Firstname">
                    </div>
                </div>
                <div class="col-xs-6">
                    <input type="text" id="register-lastname" name="register-lastname" class="form-control input-lg" placeholder="Lastname">
                </div>
                


            </div>
                  <div class="form-group">
            <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
                        <input type="text" id="register-id" name="register-id" class="form-control input-lg" placeholder="Student ID">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                        <input type="text" id="register-email" name="register-email" class="form-control input-lg" placeholder="Email">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                        <input type="password" id="register-password" name="register-password" class="form-control input-lg" placeholder="Password">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                        <input type="password" id="register-password-verify" name="register-password-verify" class="form-control input-lg" placeholder="Verify Password">
                    </div>
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-xs-6">
                    <a href="#modal-terms" data-toggle="modal" class="register-terms">Terms</a>
                    <label class="switch switch-primary" data-toggle="tooltip" title="Agree to the terms">
                        <input type="checkbox" id="register-terms" name="register-terms">
                        <span></span>
                    </label>
                </div>
                <div class="col-xs-6 text-right">
                    <button name="newuser" type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Register Account</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 text-center">
                    <small>Do you have an account?</small> <a href="javascript:void(0)" id="link-register"><small>Login</small></a>
                </div>
            </div>
        </form>
        <!-- END Register Form -->
    </div>
    
    <!-- END Login Block -->
</div>

    <!-- Footer 
    <footer class="text-muted text-center">
        <small><span id="year-copy"></span> &copy; <a href="" target="_blank"><?php echo $template['name'] . ' ' . $template['version']; ?></a></small>
    </footer>-->
    <br><br><br> <br><br><br> <br><br><br><br><br><br>
    <div class="col-sm-8 col-sm-offset-3 text-center">
        <div id="error-container">
            <div class="error-options">
    <footer class="clearfix">
            <div class="text-center">
                <h2 class="h2"> Crafted with <i class="fa fa-heart text-danger"></i> by <span class="text-primary">JNTUHCEJ-IT(2012-2016)</span><br>
                <span class="text-primary"> &copy; <?php echo $template['name'] . ' ' . $template['version']; ?></span>
                </h2> </div>
           
    </footer>
            </div>
        </div>
    </div>
    <!-- END Footer -->

<!-- END Login Container -->

<!-- Modal Terms -->

<!-- END Modal Terms -->

<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/login.js"></script>
<script>$(function(){ Login.init(); });</script>

<?php include 'inc/template_end.php'; ?>