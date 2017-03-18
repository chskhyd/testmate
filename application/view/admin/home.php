<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head_admin.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Dashboard Header -->
    <!-- For an image header add the class 'content-header-media' and an image as in the following example -->
    <div class="content-header content-header-media">
        <div class="header-section">
            <div class="row">
                <!-- Main Title (hidden on small devices for the statistics to fit) -->
                <div class="col-md-4 col-lg-6 hidden-xs hidden-sm">
                    <h1>Welcome <strong>Admin</strong><br><small>You Look Awesome!</small></h1>
                </div>
                <!-- END Main Title -->

                <!-- END Top Stats -->
            </div>
        </div>
        <!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
        <img src="img/placeholders/headers/dashboard_header.jpg" alt="header image" class="animation-pulseSlow">
    </div>
    <!-- END Dashboard Header -->

    <!-- Mini Top Stats Row -->
    <div class="row">
        
        <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="<?php echo URL; ?>adminRegister" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-fire animation-fadeIn">
                        <i class="gi gi-user_add"></i>
                    </div>
                    <h3 class="widget-content text-center animation-pullDown">
                        <strong>Add New Admin</strong>
                        
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="<?php echo URL; ?>addQues" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                        <i class="fa fa-pencil"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                    <strong>Add Question</strong><br>
                        <small>New Question</small>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        
       
        
        <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="<?php echo URL; ?>allques" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                        <i class="fa fa-file-text"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                         <strong>All Questions</strong><br>
                         <small> Total Questions = <?php echo $count['ques'];?> </small>
                        
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
         <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="<?php echo URL; ?>allstudents" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-amethyst animation-fadeIn">
                        <i class="gi gi-group"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                         <strong>All Students</strong><br>
                         <small> Total Students = <?php echo $count['stu'];?> </small>
                        
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        
        
    </div>
    <!-- END Mini Top Stats Row -->
<div id="page-content">
    <!-- Datatables Header -->
    
    
    <!-- END Datatables Header -->

    <!-- Datatables Content -->
  <div class="block full">
        <div class="block-title">
            <h2><strong>Total students appeared for test = <?php  echo $count['res'];?> </strong> </h2>
        </div>
       
        <div class="table-responsive">
            <table id="example-datatasss" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                           
                        <th class="text-center"><i class="gi gi-user"></i> &nbsp Student ID</th>
                        <th class="text-center" >Total Score </th>
                        <th class="text-center">Correct </th>
                        <th class="text-center">Wrong </th>
                        <th class="text-center">Unattempt</th>                
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php $last=0; if(!empty($data)){ foreach ($data as $value) { ?>
                        
                                    
                                    <tr>
                                        
                                        <td align="center"><?php if(!empty($value->studentid)) { echo $value->studentid;$last++;} else echo""; ?></td>
                                      
                                        <td align="center"><?php if(!empty($value->score))  echo $value->score; else if(isset ($value->score)) echo"0"; ?></td>
                                        <td align="center"><?php if(!empty($value->correct))  echo $value->correct; else if(isset ($value->correct)) echo"0"; ?></td>
                                        
                                        <td align="center"><?php if(!empty($value->wrong)) echo $value->wrong; else if(isset ($value->wrong)) echo"0";?></td>
                                      
                                        <td align="center"> <?php if(!empty($value->unattempt)) echo $value->unattempt; else if(isset ($value->unattempt)) echo"0"; ?></td>
                                          
                                        
                                         <?php if(!empty($value->studentid)){?>
                                          <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                
                                            <a href="javascript:void(0)" id="approve" class="btn btn-danger approve"  data-gid="<?php if(!empty($value->studentid))  echo $value->studentid; else echo''; ?>" data-toggle="tooltip" title="Delete"><i class="fa fa-times"></i></a>
                                                </div>
                                           
                <?php   }?>
                                        </td>
                                        
                                    </tr>     
                <?php   }?> 
                                    
                                             
                </tbody></table>  <div class="text-center">
                    <ul class="pagination pagination-lg ">
                     
                                    <?php if(empty($_GET['page'])) $p=1;else $p=$_GET['page'];
                                $res=ceil((($count['res'])/10));
                                if($res!=0)
                                {
                                      echo' <li><a href="javascript:void(0)"><i class="fa fa-angle-left"></i></a></li> ';
                 
                                for($i=1;$i<=$res;$i++)
                                { 
                                    if($p==$i ) 
                                    {
                                
                                    echo'<li class="active"> <a href="'.URL.'adminHome?page='.$i.' ">'.$i.'</a></li>';
                                    }
                                    else 
                                       echo'<li > <a href="'.URL.'adminHome?page='.$i.' ">'.$i.'</a></li>';
                               
                                
                                }
                                echo'<li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i></a></li>';
                                }
                                
                                ?>
                    <?php   }
                       if($last==0){ 
                             echo '<tr><td colspan="10" class="text-center" style="font-size: 18px"> NO Records To Display </td></tr>';
                       } ?>
                    </ul>
      
                    <!-- END Page Content --></div>





        </div>
    </div>
</div>

    <!-- END Widgets Row -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>

<!-- Remember to include excanvas for IE8 chart support -->
<!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

<?php include 'inc/template_scripts.php'; ?>


<!-- Load and execute javascript code used only in this page -->
<script src="<?php echo URL; ?>js/adminresultapproval.js" type="text/javascript" ></script>
<script src="<?php echo URL; ?>js/bootbox.min.js" type="text/javascript" ></script>
<script>    
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", '<?php echo './adminHome';?>');
    }
</script>

<?php include 'inc/template_end.php'; ?>

