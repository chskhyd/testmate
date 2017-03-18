<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class StudentHome extends Controller
{
    
    public function index()
    {
        // load views
        session_start();
        if(isset($_SESSION['id']))
        {
            
           
            require APP . 'view/student/index.php';
        }
       else {
         
          
           header('Location:'.URL.'home');
           
         }
    
    }
    
}