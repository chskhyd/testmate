<?php

class admin extends Controller
{
        
    
       public function  index()
       {
           if(isset($_POST["adminLogin"]))
           {
               $this->validate();
           }
           else
           {            
            require APP . 'view/admin/index.php';
           }
            
                    
       }
       
       private function validate()
       {
           
       
       if (isset($_POST["adminLogin"])) {
            $res = $this->model->adminValidate($_POST["login-email"], $_POST["login-password"]);
            if ($res == 1) {
                      session_start();
                     $_SESSION['admin']=$_POST['login-email'];

                header('location: ' . URL . 'adminHome');
            } else {
                 
              
                  $data['suc']="Invalid credentials";
              
              
              $this->loadview2('admin/index',$data);
            }
        }
       
    
       }
}