<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Allstudents extends Controller
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
        $data = $mo->getTotalStudents($page);
       $count=$mo->countStudents();
     
       
     
       $this->loadView2('admin/allStud',$data,$count);
        }

    
    public function process() {
        
        
        $id=$_POST['gid'];
        $mo = $this->loadModel2('pagination');
        $data = $mo->deleteStudent($id);//to delete from students(registration)
        $data=$mo->deleteResult($id); //To Delete score From test Results

   }
   

}