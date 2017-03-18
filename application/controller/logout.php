<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Logout extends Controller
{
        
    
       public function  index()
       {
           
            
            session_start();
            if(isset ($_SESSION['admin']))
            {
                unset($_SESSION['admin']);
            }
            session_destroy();
            $this->redirect('home');
            
                    
       }
}
    
