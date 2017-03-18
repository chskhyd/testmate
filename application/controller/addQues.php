<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AddQues extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
        session_start();
        if(isset($_SESSION['admin']) && !isset($_POST['insert']))
        {
            require APP . 'view/admin/addQuestion.php';
        }
        else if(isset($_SESSION['admin']) && isset($_POST['insert']))
        {
            $this->insert();
        }
        else 
        {
               $this->redirect('admin');
        }
    }
    private function insert() {
        
 
        if(isset($_SESSION['admin']))
        {
        
            if (isset($_POST["insert"])) {
            
             $res=$this->model->addQuestion($_POST["ques"],  $_POST["opt1"],$_POST["opt2"], $_POST["opt3"], $_POST["opt4"], $_POST["ans"]);
            if($res)
            {
                $data['suc']='successf';
            }    
             $this->loadview2('admin/addQuestion',$data);
           
              
            }
        }
        else 
        {
               $this->redirect('admin');
        }
    }
}