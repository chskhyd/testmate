<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Exam extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        session_start();
          
    
        if(isset($_SESSION['id']))
        {
                $que=0;
                $mo = $this->loadModel2('pagination');               
         
            if (isset($_POST['nextQue']))                    
            {
                
                        $que=$_POST['nextQue']+1;                        
                    
            }
            else if(isset($_POST['prevQue']) && $_POST['prevQue']!=1)
            { 
                    $que=$_POST['prevQue']-1;
            }
            else if(isset($_POST['submit']))
            {
                if(!(empty($_POST['example-radios'])))
                {
                
                    $que= $_POST['submit'];
                
                    $_SESSION['ans'][$que]=$_POST['example-radios'];
                     if(!empty($_SESSION['review'][$que]))
                         $_SESSION['review'][$que]='';
                     $d = $mo->getAllAnswers();
                     if($que==count($d))
                     {
                          $que= $_POST['submit'];
                     }
                     else 
                     {
                          $que=$_POST['submit']+1;
                     }
                     
                    
                }
                 else {
                    $que= $_POST['submit'];
                    
                }                   
            }
            else if(isset($_GET['que']))
            {
                    $que=$_GET['que'];
            }            
            else if(isset ($_POST['reset']))
            {
                $que=$_POST['reset'];
                if(!empty($_SESSION['ans'][$que]))
                {
                    $_SESSION['ans'][$que]='';
                    
                }
                if(!empty($_SESSION['review'][$que]))
                {
                    $_SESSION['review'][$que]='';
                    
                }
                                
                
            }
            else if(isset ($_POST['review']))
            {
               
                    $que= $_POST['review'];
                     if(!(empty($_POST['example-radios'])))
                     {
                
                        $_SESSION['ans'][$que]=$_POST['example-radios'];
                        
                     }
                     $_SESSION['review'][$que]=1;
                    $d = $mo->getAllAnswers();
                     if($que==count($d))
                     {
                          $que= $_POST['review'];
                     }
                     else 
                     {
                          $que=$_POST['review']+1;
                     }                          
                
            }
            
            else {
     
                
                   if($que=="0" || $que == "")
                   {
                        $que=1;
                        
                   }
            }

         $count=$mo->getTotal();         
         $data = $mo->getQuest($que);
         $this->loadView2('student/exam',$data,$count);
        
        
        }
    else {

           header('Location:'.URL.'home');
        }
    
  }
}
   