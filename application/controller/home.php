<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Home extends Controller
{
      
    
       public function  index()
       {
             session_start();
           if(isset($_POST['newuser']))
           {
               $this->addStudent();
           }
           else if(isset($_POST['signin']))
           {
               $this->validate();
           }
           else if(isset($_SESSION['id']))
           {
                header('Location:'.URL.'exam');
           }
            else 
           { 
                require APP . 'view/home/index.php';
           }
            
                    
       }
       
       
       private function addStudent()
        {
         if(isset($_POST['newuser']))
         {
             if(!$this->model->studentExist($_POST["register-id"]))
             {
                 $res=$this->model->addStudent( $_POST["register-firstname"],  $_POST["register-lastname"],$_POST["register-id"], $_POST["register-email"],md5($_POST["register-password"]));
             
              
                if($res)
                 {
                    $data['suc']="success";
                }
                
             }
              else
              {
                  $data['exist']="success";
                 
              }
      
              $this->loadview2('home/index',$data);
             
         }
        }
         
         private function validate() {

        if (isset($_POST["signin"])) {

                 $res = $this->model->validate($_POST["login-id"], md5($_POST["login-password"]));
                 if ($res == 1) 
                 {

                     session_start();
                     
                     $_SESSION['id']=$_POST["login-id"];
                     header('Location: ' . URL . 'studentHome');
                             
                    
                }
                else 
                {
                    $data['error']="Invalid Credentials";
                }
                 $this->loadview2('home/index',$data);
                 
            
            } 
         
         
     }
       
       
       
}
    