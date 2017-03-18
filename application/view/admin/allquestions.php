<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_header_admin.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Datatables Header -->
   

    
    <!-- Datatables Content -->
    <div class="block full">
        <div class="block-title"><?php foreach ($count as $val)?>
            <h2><strong>Total</strong> Questions = <?php echo $val->num;?></h2>
        </div>
       
        <div class="table-responsive">
            <table id="example-datatasss" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center"><i class="gi gi-user"></i> &nbsp Question</th>
                        <th>option 1 </th>
                        <th>option 2 </th>
                        <th>option 3 </th>
                        <th>option 4 </th>
                        <th>answer </th>
                
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php $last=0; if(!empty($data)){ foreach ($data as $value) {?>
                                    
                                    <tr>
                                        
                                        <td><?php if(!empty($value->quesnum)) { echo $value->quesnum; $last++;} else echo""; ?></td>
                                      
                                        <td ><?php if(!empty($value->question)){  echo nl2br($value->question); }else echo""; ?></td>
                                        <td><?php if(!empty($value->option1))  echo $value->option1; else echo""; ?></td>
                                        
                                        <td><?php if(!empty($value->option2)) echo $value->option2; else echo"";?></td>
                                      
                                        <td> <?php if(!empty($value->option3)) echo $value->option3; else echo ""; ?></td>
                                          <td><?php if(!empty($value->option4)) echo $value->option4; else echo " ";?></td> 
                                          
                                        <td><a href="javascript:void(0)" class="label label-warning"><?php if(!empty($value->answer)) echo $value->answer; else echo""; ?></a></td>
                                         <?php if(!empty($value->quesnum)){?>
                                          <td class="text-center">
                                            
                                              <div class="btn-group btn-group-xs">
                                                
                                                  <a href="#modal-delete"  title="Edit" data-toggle="modal" data-gid="<?php if(!empty($value->quesnum))  echo $value->quesnum; else echo""; ?>" data-q="<?php echo htmlspecialchars($value->question); ?>" data-o1="<?php echo $value->option1;?>" data-o2="<?php echo $value->option2;?>" data-o3="<?php echo $value->option3;?>"data-o4="<?php echo $value->option4;?>"data-ans="<?php echo $value->answer;?>" class="btn btn-default deletegrab1"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" id="approve" class="btn btn-danger approve"  data-gid="<?php if(!empty($value->quesnum))  echo $value->quesnum; else echo''; ?>" dadta-toggle="tooltip" title="Delete"><i class="fa fa-times"></i></a>
                                                </div>
                                           
                                           
                                           <?php   }?>
                                        </td>
                                        
                                    </tr>     
                   <?php   }?> 
                                    
                                             
                </tbody></table>  
              <?php   if($last<10) for(;$last<=13;){ echo '<br>'; $last++;}      ?> 
            <div class="text-center">
                    <ul class="pagination pagination-lg ">
                     
                                    <?php if(empty($_GET['page'])) $p=1;else $p=$_GET['page'];
                                $res=ceil((($val->num)/10));
                                if($res!=0)
                                {
                                      echo' <li><a href="javascript:void(0)"><i class="fa fa-angle-left"></i></a></li> ';
                 
                                for($i=1;$i<=$res;$i++)
                                { 
                                    if($p==$i ) 
                                    {
                                
                                    echo'<li class="active"> <a href="'.URL.'allques?page='.$i.' ">'.$i.'</a></li>';
                                    }
                                    else 
                                       echo'<li > <a href="'.URL.'allques?page='.$i.' ">'.$i.'</a></li>';
                               
                                
                                }
                                echo'<li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i></a></li>';
                                }
                                
                                ?>
                    <?php   }
                       else{ ?>
                             <tr><td colspan="10" class="text-center" style="font-size: 18px"> NO Records To Display </td></tr>
                       <?php } ?>
                    </ul>
        </div>
    </div>
<!-- END Page Content -->






<div id="modal-delete" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center">
                <h2 class="modal-title"><i class="fa fa-pencil"></i>Update Question</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="javascript:void(0)" id="questionValidation" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered"  >
                  
				       
				  
				  
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
                            <select id="ans" name="ans" class="form-control" size="1">
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
                           
                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
                                <button type="submit" id="basicchnge" class="btn btn-sm btn-primary">Save</button>
                        </div>
                    </div>
                </form>
                <!-- END Basic Form Elements Content -->
            </div>
            <!-- END Basic Form Elements Block -->
      
        </div>
    </div>
                
            </div>
            <!-- END Modal Body -->
      
    </div>
</div>



<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>




<script src="<?php echo URL; ?>js/adminapproval2.js" type="text/javascript" ></script>
<script src="<?php echo URL; ?>js/bootbox.min.js" type="text/javascript" ></script>


<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/questionValidation.js"></script>
<script>$(function(){ questionValidation.init(); });</script>
<script>    
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", '<?php echo './allques';?>');
    }
</script>
<?php include 'inc/template_end.php'; ?>