<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AdminRegister extends Controller
{
    
    public function index()
       {
           session_start();
           if(isset($_SESSION['admin']))
           {
               
               if(isset($_POST['newadmin']))
               {
                   $this->addAdmin();
               }
            else {
                
                     require APP . 'view/admin/register.php';
                }
              
           }
        else {
            
            
           $this->redirect('admin');
       
          
            }
           
           
       }
       private function addAdmin()
     { 
         
          
             if(isset($_POST['newadmin']))
            {
              if(!$this->model->adminExist($_POST["register-email"]))
             {
               $res= $this->model->addAdmin( $_POST["register-firstname"],  $_POST["register-lastname"], $_POST["register-email"], $_POST["register-password"]);
                if($res)
                {
                    $data['suc']='added Successful';
                  
                }
                else
                {
                    $data['eroor']='unsuccesful';
                }
             }
            else {
                     $data['exist']='failed';
                      
                }
               
            $this->loadview2('admin/register',$data);
            }
             
        
         
         
     }
}