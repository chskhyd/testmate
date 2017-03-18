<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AdminHome extends Controller
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
       
       if(isset($_SESSION['admin']))
       {
        
        
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
        $data = $mo->getTestResults($page);
        $count=$mo->getTotalResults();
        $tmp=$mo->getTotal();
        $count=  array_merge($tmp,$count);
        $tmp=$mo->countStudents();
        $count=  array_merge($count,$tmp);
          
          
          $count=  json_decode(json_encode($count), true);// to remove std database objects
          $count=array_column($count,'num');// after this step count contains 0->totalquestions 1->results 2->students
          
          $count['ques']=$count[0];
          $count['res']=$count[1];
          $count['stu']=$count[2];
       
          $count =  array_slice($count,3);//removing array index 0 1 2  values from count 

       $this->loadView2('admin/home',$data,$count);
     
      
      
    }
    else {
           $this->redirect('admin');
       }
    }
    
    
    public function process() {
        
        $id=$_POST['gid'];
        $mo = $this->loadModel2('pagination');
        $data = $mo->deleteResult($id);
      

   }
   
    
  
   
}