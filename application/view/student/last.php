<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>

<!-- Error Container -->
<div id="error-container">
    <div class="error-options">
        <h3><i class="fa fa-chevron-circle-left text-muted"></i> <a href="<?php echo URL;?>home">Click here to go Home page</a></h3>
    </div>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 text-center">
            <h1 class="animation-tossing">
                <i class="fa fa-bullhorn text-success"></i>Done.!!</h1>
            <h2 class="h3">Thank you.!! For Taking Test with us!! your score is as follows :</h2>
            <h1 class="h3"><strong class="text-success"><?php echo $correct*2; ?></strong></h1>
             <h2 class="h3"> Total Questions = <?php echo $total ?> </h2>
             <h2 class="h3"> Total Attempted = <?php echo $correct+$wrong;?> </h2>
             <h2 class="h3"> Correct Answers = <?php echo $correct ?> </h2>
            <h2 class="h3">  Wrong Answers = <?php echo $wrong ?></h2>
             <h2 class="h3"> Un Attempted = <?php echo $unattemp ?> </h2>
        </div>
        
    </div><br><br><br><br>

<!-- END Error Container -->

 <footer class="clearfix">
             <div class="text-center">
                <h2 class="h2"> Crafted with <i class="fa fa-heart text-danger"></i> by <span class="text-primary">JNTUHCEJ-IT(2012-2016)</span><br>
                <span class="text-primary"> &copy; <?php echo $template['name'] . ' ' . $template['version']; ?></span>
                </h2> </div>
           
        </footer></div>

<?php include 'inc/template_end.php'; ?>