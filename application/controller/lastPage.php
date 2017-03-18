<?php

class LastPage extends Controller
{
        
    
       public function  index()
       {
           
              session_start();
        
        if(isset($_SESSION['id']))
        {
                     $mo = $this->loadModel2('pagination');   
                    $d = $mo->getAllAnswers();
                    
                    array_unshift($d,'');
                     unset($d[0]);
                    if(!empty($_SESSION['ans']))
                    { 
                        $correct=  array_intersect_assoc($_SESSION['ans'],$d);
                        $wrong=  array_diff_assoc($_SESSION['ans'], $d); 
                    }
                    else {
                            $correct=NULL;
                             $wrong=NULL;
                       }
                     $data=NULL;
                     $data['total']=count($d);
                     $data['correct']=count($correct);
                     $data['wrong']=count($wrong);
                     $data['unattemp']= $data['total'] -($data['correct']+ $data['wrong']);                
                     
                                     
                     
                    
                     if($this->model->appearedTest($_SESSION['id']))
                     {
                         $res= $this->model->updateResult($_SESSION['id'],$data['correct'], $data['wrong'], $data['unattemp']);
                     }
                     else
                     {
                         $res= $this->model->addResult($_SESSION['id'],$data['correct'], $data['wrong'], $data['unattemp']);
                     }
                     
                     unset($_SESSION['id']);
                      session_destroy();
                    $this->loadView2('student/last',$data);
        }
         else {
                  header('Location:'.URL.'home');
        }
        
                    
       }
       
    
       
       
    
    
}