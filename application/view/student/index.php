<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head2.php'; ?>

<div id="page-content">
    <!-- Blank Alternative Header -->
    <div class="content-header">
        <div class="header-section">
            <h1 class="text-primary">
                <strong>Welcome  Abroad!!</strong>
            </h1>
        </div>
    </div>

    <!-- Blank Alternative Content -->
    <div class="block block-alt-noborder">
     <h3 class="sub-header text-center"><strong>Instructions for Test</strong> </h3>

         <table style="text-align: justify;padding-right: 20px;margin-top: 20px;font-family: Futura;" width="100%" cellpadding="0" cellspacing="0">
                                                <tbody><tr>
                                                    <td style="vertical-align: top;padding-left: 20px" width="1%">
                                                        1.
                                                    </td>
                                                    <td style="padding-bottom: 20px;" width="99%">
                                                        The Test has  30  questions and duration is 30 minutes.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align: top;padding-left: 20px" width="1%">
                                                        2.
                                                    </td>
                                                    <td style="padding-bottom: 20px;" width="99%">
                                           
                                                     There will be no Negative marks.
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align: top;padding-left: 20px" width="1%">
                                                        3.
                                                    </td>
                                                    <td style="padding-bottom: 20px;" width="99%">
                                                        The countdown  timer displayed on the test screen will display the time left to complete  the Test  and the timer will start the moment the first  question appears on the screen.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align: top;padding-left: 20px" width="1%">
                                                        4.
                                                    </td>
                                                    <td style="padding-bottom: 20px;" width="99%">
                                                        To navigate to  any question, click the question number on the scroll bar at the top  of the screen.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align: top;padding-left: 20px" width="1%">
                                                        5.
                                                    </td>
                                                    <td style="padding-bottom: 20px;" width="99%">
                                                       To navigate to  Previous and Next question, click the prev and next button at the bottom of the screen.
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td style="vertical-align: top;padding-left: 20px" width="1%">
                                                        6.
                                                    </td>
                                                    <td style="padding-bottom: 20px;" width="99%">
                                                       To answer a question, choose any one of the options provided and click <b>Submit </b>.Unless you don't click submit, the answer will not be recorded.The recorded answer will be indicated differently (Orange) on the scroll bar provided at the top of the web page.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align: top;padding-left: 20px" width="1%">
                                                        7.
                                                    </td>
                                                    <td style="padding-bottom: 20px;" width="99%">
                                                      To change a chosen or submitted answer , click on other options  provided and re <b>submit</b> it again.
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td style="vertical-align: top;padding-left: 20px" width="1%">
                                                        8.
                                                    </td>
                                                    <td style="padding-bottom: 20px;" width="99%">
                                                      To clear a chosen answer, click <b>Reset</b>.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align: top;padding-left: 20px" width="1%">9.    </td>
                                                    <td style="padding-bottom: 20px;" width="99%">
                                                       In case you wish  to come back to a specific answer for review, select the answer, click <b>Mark for Review</b>. 
                                                       Questions marked  for review will be indicated differently (Green) on the scroll bar at the top of the page till the time you 
                                                       come back to the thus help in quick navigation. 
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td style="vertical-align: top;padding-left: 20px" width="1%">
                                                        10.
                                                    </td>
                                                    <td style="padding-bottom: 20px;" width="99%">
                                                         To skip a question you do not wish to attempt at all or attempt later, click <b>Next</b>.
                                                    </td>
                                                </tr>
                                                
                                                 <tr>
                                                    <td style="vertical-align: top;padding-left: 20px" width="1%">
                                                        11.
                                                    </td>
                                                    <td style="padding-bottom: 20px;" width="99%">
                                           
                                                      To Quit the test, click <b>Quit Test</b>  appears  on the Top left side .You will be automatically logged out of the test after 30 minutes(Time Out). 
                                                      All answers  submitted by you (including those that are Marked for Review) will be  considered as the final answers. </td>
                                                </tr>
                                                 <tr>
                                                    <td style="vertical-align: top;padding-left: 20px" width="1%">
                                                        12.
                                                    </td>
                                                    <td style="padding-bottom: 20px;" width="99%">
                                                        After Completion of your Exam  Score will be shown on the Screen. </td>
                                                      </tr>
                                                    <tr>
                                                    <td style="vertical-align: top;padding-left: 20px" width="1%">
                                                        13.
                                                    </td>
                                                    <td style="padding-bottom: 20px;" width="99%">
                                                        If you are  ready then click <b>Start </b> to begin the Test. </td>
                                                      </tr> 
                                                      
                                            </tbody></table>
     
     
     <form action="<?php echo URL; ?>exam" method="post" id="form-login" class="form-horizontal">
              
            <div class="form-group form-actions">
                  <div class="col-xs-8 text-right">
                        
                      <button name="start" id="start" type="submit" class="btn btn-lg btn-primary"><i class="fa fa-angle-right"></i>Lets Start the Exam</button>
                        
                  </div></div>
            </form>
     
    </div>
    <!-- END Blank Alternative Content -->

</div>
<!-- END Page-->

<?php include 'inc/page_footer.php'; ?>

<!-- Remember to include excanvas for IE8 chart support -->
<!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

<?php include 'inc/template_scripts.php'; ?>



<?php include 'inc/template_end.php'; ?>