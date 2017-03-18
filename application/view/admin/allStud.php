<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_header_admin.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Datatables Header -->
   

    
    <!-- Datatables Content -->
    <div class="block full">
        <div class="block-title"><?php foreach ($count as $val)?>
            <h2><strong>Total</strong> Students = <?php echo $val->num;?></h2>
        </div>
       
        <div class="table-responsive">
            <table id="example-datatase" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        
                        <th class="text-center"><i class="gi gi-user"></i> &nbsp student ID</th>
                         <th class="text-center">First Name</th>
                        <th class="text-center" > Last Name</th>
                        <th class="text-center" > Email</th>
                        <th class="text-center"> Score </th>                
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php $last=0; if(!empty($data)){ foreach ($data as $value) {?>
                                    
                                    <tr>
                                        
                                        <td class="text-center"><?php if(!empty($value->collegeid)) { echo $value->collegeid; $last++;} else echo""; ?></td>
                                      
                                        <td class="text-center"><?php if(!empty($value->firstname))  echo $value->firstname; else echo""; ?></td>
                                        <td class="text-center"><?php if(!empty($value->lastname))  echo $value->lastname; else echo""; ?></td>
                                        
                                        <td class="text-center"><?php if(!empty($value->email)) echo $value->email; else echo"";?></td>
                                       
                                        <td class="text-center"><a href="javascript:void(0)" class="label label-warning"><?php if(isset($value->score)) echo $value->score; else echo" Not attempted"; ?></a></td>
                                         <?php if(!empty($value->collegeid)){?>
                                          <td class="text-center">
                                            
                                              <div class="btn-group btn-group-xs">
                                                
               
                                                <a href="javascript:void(0)" id="approve" class="btn btn-danger approve"  data-gid="<?php if(!empty($value->collegeid))  echo $value->collegeid; else echo''; ?>" data-toggle="tooltip" title="Delete"><i class="fa fa-times"></i></a>
                                                </div>
                                           
                                           
                                           <?php   }?>
                                        </td>
                                        
                                    </tr>     
                   <?php  }?> 
                                    
                                 
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
                                
                                    echo'<li class="active"> <a href="'.URL.'allstudents?page='.$i.' ">'.$i.'</a></li>';
                                    }
                                    else 
                                       echo'<li > <a href="'.URL.'allstudents?page='.$i.' ">'.$i.'</a></li>';
                               
                                
                                }
                                echo'<li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i></a></li>';
                                }
                                
                                ?> </ul>
                    <?php   }
                       else{ 
                             echo'<tr><td colspan="10" class="text-center" style="font-size: 18px"> NO Records To Display </td></tr>';
                         } ?>
                   
        </div>
    </div>
<!-- END Page Content -->
        </div>
    </div>




<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>





<script src="<?php echo URL; ?>js/bootbox.min.js" type="text/javascript" ></script>
<script type="text/javascript">

$(".approve").bind("click", deleteQue);


 function deleteQue() {

           var par = $($(this).closest("tr"));  //tr
                    var offerdelete = 'offerdelete';
                    var rid = $(this).data('gid');
                    $('#deleteoffer1').attr("disabled", true);
                    bootbox.confirm("Are you sure you want to Delete this Student Data( registration and Score).?", function (result) {
                        if (result)
                        {
                            if (par) {
                                $.ajax({
                                    url: './allstudents/process',
                                    type: "POST",
                                    async: false,
                                    cache: false,
                                    data: {'gid': rid},
                                    success: function (response) {
                                        //$('#output').html("Your form was submitted!");
                                            window.location = "./allstudents";
                                        
                                        }
                                });
                            }
                        } else {

                        }
                    });

                }
                ;
                ;
                
                
                



</script>

<script>    
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", '<?php echo './allstudents';?>');
    }
</script>

<?php include 'inc/template_end.php'; ?>