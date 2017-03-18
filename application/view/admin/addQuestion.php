<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_header_admin.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <div class="text-center">
     <?php  if(!empty($suc)){ echo '<h2 class="text-success">Question Added successfully <br>';?>
               
                 
                 <?php } ?>
    
    </div>
            <h1>
                <i class="fa fa-pencil"></i>Add New Question<br><small></small>
            </h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8">
            <!-- Basic Form Elements Block -->
            <div class="block">
                      
                <!-- Basic Form Elements Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                    
                        
                    </div>
                    
                    
                    
                    <h2>Fill up the  Questions and Options</h2>
                </div>
                <!-- END Form Elements Title -->

                <!-- Basic Form Elements Content -->
                
                
     
               
          
                <form action="" method="post" id="questionValidation" enctype="multipart/form-data" class="form-horizontal form-bordered">
                  
				 
				  
				  
				      <div class="form-group">
                        <label class="col-md-3 control-label" for="example-textarea-input">Question</label>
                        <div class="col-md-9">
                            <textarea id="ques" name="ques" rows="9" class="form-control" placeholder="content.."></textarea>
                        </div>
                    </div>
				  
				  
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-text-input">Option 1</label>
                        <div class="col-md-9">
                            <input type="text" id="opt1" name="opt1" class="form-control" placeholder="Text">
                           
                        </div>
                    </div>
                   
                        <div class="form-group">
                        <label class="col-md-3 control-label" for="example-text-input">Option 2</label>
                        <div class="col-md-9">
                            <input type="text" id="opt2" name="opt2" class="form-control" placeholder="Text">
                            
                        </div>
                    </div>
					   <div class="form-group">
                        <label class="col-md-3 control-label" for="example-text-input">Option 3</label>
                        <div class="col-md-9">
                            <input type="text" id="opt3" name="opt3" class="form-control" placeholder="Text">
                            
                        </div>
                    </div>
					   <div class="form-group">
                        <label class="col-md-3 control-label" for="example-text-input">Option 4</label>
                        <div class="col-md-9">
                            <input type="text" id="opt4" name="opt4" class="form-control" placeholder="Text">
                          
                        </div>
                    </div>
					
                 
                
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-select">Answer</label>
                        <div class="col-md-9">
                            <select id="ans" name="ans" class="form-control" size="1" >
                                <option value="">Please select</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
				<option value="4">Option #4</option>
                            </select>
                        </div>
                    </div>
                   
                   
                   
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button name="insert" type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                    </div>
                </form>
                <!-- END Basic Form Elements Content -->
            </div>
            <!-- END Basic Form Elements Block -->
      
        </div>
    </div>
    <!-- END Form Example with Blocks in the Grid -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/questionValidation.js"></script>
<script>$(function(){ questionValidation.init(); });</script>

<?php include 'inc/template_end.php'; ?>