<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Allques extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
   public function index()
    {
        session_start();
       if(isset($_SESSION['admin']))
       {
        
        $this->GrabPage();
       }
        else {
           $this->redirect('admin');
       }
           
    }
    
    
    private function GrabPage() {
        
        
       
      $page = 0;
            if(isset($_GET['page']))
            {
                $page=$_GET['page'];
                   if($page=="1" || $page == "")
                   {
                        $page=0;
                        
                   }
                else {
                    $page= ($page*10)- 10;
                    
                }
               
            }
          
        $mo = $this->loadModel2('pagination');
        $data = $mo->getQues($page);
       $count=$mo->getTotal();
     
       
     
       $this->loadView2('admin/allquestions',$data,$count);
        }

    
    public function process() {
        
        
        $quesnum=$_POST['gid'];
        $mo = $this->loadModel2('pagination');
        $data = $mo->deleteQuestion($quesnum);
        $mo->updateQuesnum();
    
        //header('Location:'.URL.'trail');

   }
   

   
   
   public function update() {
       
    
       $mo=$this->loadModel2('pagination');
       $mo->updateQuestion($_POST['gid'], $_POST['ques'],$_POST['opt1'],$_POST['opt2'],$_POST['opt3'],$_POST['opt4'],$_POST['ans']);
       
       
      
   }
          
}