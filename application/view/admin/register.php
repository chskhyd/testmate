<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>

<!-- Login Alternative Row -->
<div class="container">
    <div class="row">
    
        <div class="col-md-5 col-md-offset-1">
                                <div class="error-options">
<h3>
<i class="fa fa-chevron-circle-left text-muted"></i>
<a href="<?php echo URL?>adminHome">Go Back</a>
</h3>
</div>
            
            <div id="login-alt-container">

                <!-- Title -->
                <h1 class="push-top-bottom">
                    <i class="gi gi-flash"></i> <strong>Welcome Admin.!!</strong><br>
                    <small>Add Your New Partner Here </small>
                </h1>
                <!-- END Title -->

                 <?php  if(!empty($suc)){ echo '<h2 class="text-success">New Admin added Succesfully..<br>';
     
           
                 
                  } else if(!empty($error)){
                 echo '<h2 class="text-success">Failed to Register..Please Try Again<br>';
                 
             }else if(!empty($exist)){
                 echo '<h2 class="text-success">Account Already Exist!! Please Login .. <br>';
                 
             }  
             ?>

                <!-- Footer -->
                
            </div>
        </div>
        <div class="col-md-5">
            <!-- Login Container -->
            <div id="login-container">
                <!-- Login Title -->
                <div class="login-title text-center">
                    <h1><strong>Register</strong></h1>
                </div>
                <!-- END Login Title -->

                <!-- Login Block -->
                <div class="block push-bit">
                    <!-- Login Form -->
                    <form action="" method="post" id="form-register" class="form-horizontal">
                        
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
                                <button name="newadmin" type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Register Account</button>
                            </div>
                        </div>
                        
                    </form>
                    
                    <!-- END Login Form -->


                    
                    <!-- END Register Form -->
                </div>
                <!-- END Login Block -->
            </div>
            <!-- END Login Container -->
        </div>
    </div>
</div>
<!-- END Login Alternative Row -->

<!-- Modal Terms -->

<!-- END Modal Terms -->

<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/login.js"></script>
<script>$(function(){ Login.init(); });</script>

<?php include 'inc/template_end.php'; ?>