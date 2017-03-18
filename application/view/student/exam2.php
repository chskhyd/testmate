<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head3.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Static + Fixed Footer Header -->
    <div class="content-header">
        <div class="header-s">
               
         
         <?php foreach ($count as $val) { }?>
            <h1>
                <div class="col-md-4 col-lg-6 hidden-xs hidden-sm">
                    <h1>Total Questions = <strong><?php echo $val->num;?></strong> &nbsp &nbsp &nbsp Attempted = <?php if(!empty($_SESSION['ans'])) echo '<strong>'.count($_SESSION['ans']).'</strong> '; else echo '<strong>0</strong>';?> </h1>
                </div>
                
               <div class="text-left">
                   
                 <ul class="pagination pagination-lg ">
                <li></li>
                
                <?php foreach ($data as $value) {?> 
                <?php 
                

                $res=  ceil(($value->quesnum)/15); // IT WORKS FOR 150 Questions
                
                switch($res)
                    {
                        
                        case 1:
                                 $limit=15;
                                 $i=1;
                                 break;
                        case 2:
                                $limit=30;
                                 $i=16;
                                 break;
                        case 3:
                                $limit=45;
                                 $i=31;
                                 break;
                        case 4:
                                $limit=60;
                                 $i=46;
                                 break;
                        case 5:
                                $limit=75;
                                 $i=61;
                                 break;
                        case 6:
                                $limit=90;
                                 $i=76;
                                 break;
                        case 7:
                                $limit=105;
                                 $i=91;
                                 break;
                        case 8:
                                $limit=120;
                                 $i=106;
                                 break;
                        case 9:
                                $limit=135;
                                 $i=121;
                                 break;
                       
                         case 10:
                                $limit=150;
                                 $i=136;
                                 break;     
                            
                        
                        
                    }
                  
                    if($limit>($val->num))
                        $limit=$val->num;
                    $pre=$i-1;
                    if($pre==0)
                    {    $pre=1;
                       echo '<li class="disabled"><a href="">'.'<i class="fa fa-angle-left"></i></a></li>';
                    }
                    else
                    {
                        echo '<li><a href="'.URL.'exam?que='.$pre.'">'.'<i class="fa fa-angle-left"></i></a></li>';
                    }
               for(;$i<=$limit;$i++)
                {
                    if($value->quesnum==$i)
                    {
                     echo '<li class="active"><a href="'.URL.'exam?que='.$i.' ">'.$i.'</a></li>';
            
                    }
                    
                     else if(!empty ($_SESSION['ans'][$i]) &&  !empty($_SESSION['review'][$i]) || !empty($_SESSION['review'][$i]))
                     {
                          echo '<li><a href="'.URL.'exam?que='.$i.' ">'.'<span class="text-success">'.$i.'</span></a></li>';
                     }
                      else if(!empty ($_SESSION['ans'][$i]))
                     {
                         echo '<li><a href="'.URL.'exam?que='.$i.' ">'.'<span class="text-warning">'.$i.'</span></a></li>';
                     }
                    else {
                         echo '<li><a href="'.URL.'exam?que='.$i.' ">'.$i.'</a></li>';
                    }
                }?>
                <?php
                
                    if($i>($val->num))
                    {
                        echo '<li class="disabled"><a href="">'.'<i class="fa fa-angle-right"></i></a></li>';
                    }
                    else
                        echo '<li><a href="'.URL.'exam?que='.$i.'">'.'<i class="fa fa-angle-right"></i></a></li>';
                }?>
            </ul>
            </h1>
        </div>
    </div>
    
    
    <div class="block full block-alt-noborder">
        <h3 class="sub-header text-center"> Showing <strong class="text-primary"> <?php echo $value->quesnum;?></strong> of <strong class="text-primary"><?php echo $val->num;?></strong></h3>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                
                    <form  id="exam"  action="<?php echo URL; ?>exam" method="post"  class="form-horizontal form-bordered" >
                  
				   <div class="form-group">
                      <label class="col-md-1 control-label"></label>
                        <div class="col-md-9">
                             
                            <p class="lead"> <?php if(!empty($value->question))echo nl2br($value->question); else echo'';?> </p>
                        </div>
                                   </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>
                        <div class="col-md-9">
						<div class="lead">
                            <div class="radio">
                                <label for="example-radio1">
                                    <input  <?php if(!empty($_SESSION['ans'][$value->quesnum])) if($_SESSION['ans'][$value->quesnum]==1)echo 'checked';?> type="radio" id="example-radio1" name="example-radios" value="1"> <?php echo $value->option1;?>
                                </label>
                            </div>
                            <div class="radio">
                                <label for="example-radio2">
                                    <input  <?php if(!empty($_SESSION['ans'][$value->quesnum])) if($_SESSION['ans'][$value->quesnum]==2)echo 'checked';?> type="radio" id="example-radio2" name="example-radios" value="2"> <?php echo $value->option2;?>
                                </label>
                            </div>
                            <div class="radio">
                                <label for="example-radio3">
                                    <input  <?php if(!empty($_SESSION['ans'][$value->quesnum])) if($_SESSION['ans'][$value->quesnum]==3)echo 'checked';?> type="radio" id="example-radio3" name="example-radios" value="3"> <?php echo $value->option3;?>
                                </label>
                            </div>
							<div class="radio">
                                <label for="example-radio4">
                                    <input  <?php if(!empty($_SESSION['ans'][$value->quesnum])) if($_SESSION['ans'][$value->quesnum]==4)echo 'checked';?> type="radio" id="example-radio3" name="example-radios" value="4"> <?php echo $value->option4;?>
                                </label>
                            </div>
							</div>
                           
                        </div>
                        
                    </div>
                        
                        <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-2">
                           
                          
                
                    
                           <button name="prevQue" <?php if($value->quesnum==1)echo 'class="btn btn-sm btn-primary disabled" ';else echo ' class="btn btn-sm btn-primary" ';?>value="<?php echo $value->quesnum;?>" ><i class="fa fa-arrow-left" ></i> Prev</button>
                           <button type="submit" id="<?php if($val->num==$value->quesnum) echo'finish'; else echo'submit';?>" name="<?php if($val->num==$value->quesnum){ echo 'finish';} else echo 'submit';?>" value="<?php echo $value->quesnum;?>" class="btn btn-sm btn-warning"><i class="fa fa-angle-right"></i> <?php if($val->num==$value->quesnum) echo 'Finish'; else echo'Submit';?></button>
                           <button name="review" value="<?php echo $value->quesnum;?>" class="btn btn-sm btn-success"> Mark for review  </button>
                           <button name="reset" class="btn btn-sm btn-warning" value="<?php echo $value->quesnum;?>"><i class="fa fa-repeat"></i> Reset</button>
                           <button  name="nextQue" <?php if($value->quesnum==$val->num)echo 'class="btn btn-sm btn-primary disabled" ';else echo ' class="btn btn-sm btn-primary" ';?> value="<?php echo $value->quesnum;?>" >Next <i class="fa fa-arrow-right"></i></button>
                           
                        </div> </div>
                    </form>
                        
				 
            </div>
        </div>
    </div>
    <!-- END Dummy Content -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php';?>
<!-- Load and execute javascript code used only in this page -->
<?php include 'inc/clock.php';?>

   <script type="text/javascript">

$(".quit").bind("click", quitTest);


 function quitTest() {

          
                    bootbox.confirm("Are you sure you want to Quit Test.?", function (result) {
                        if (result)
                        {
                            $.removeCookie('endDate'); 
                              window.location="./lastPage";
                           
                        } else {

                        }
                    });

                }          
</script>
 

