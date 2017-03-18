<?php

class Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
    
    
    public function addStudent($fname,$lname,$id,$email,$pass) { // adds the  new student to the database
        
        $sql = "INSERT INTO students (firstname,lastname,collegeid,email,password) VALUES (:fname,:lname,:id,:email,:pass)";
        $query = $this->db->prepare($sql);
        $parameters = array(':fname' => $fname, ':lname' => $lname, ':id' => $id, ':email' => $email, ':pass' => $pass);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $res=$query->execute($parameters);
        return $res;
        
      }
    
     public function addAdmin($fname,$lname,$email,$pass) {// adds the new admin to the database
        
        $sql = "INSERT INTO admin(firstname,lastname,email,password) VALUES (:fname,:lname,:email,:pass)";
        $query = $this->db->prepare($sql);
        $parameters = array(':fname' => $fname, ':lname' => $lname,  ':email' => $email, ':pass' => $pass);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

       $res= $query->execute($parameters);
       return $res;
        
      }
    
    
  
    public function addQuestion($ques,$opt1,$opt2,$opt3,$opt4,$ans) {// adds the new  question to question table in the databasae
        
         $sql = "INSERT INTO questions (question,option1,option2,option3,option4,answer) VALUES (:qs,:o1,:o2,:o3,:o4,:ans)";
        $query = $this->db->prepare($sql);
        $parameters = array( ':qs' => $ques, ':o1' => $opt1, ':o2' => $opt2, ':o3' => $opt3, ':o4' => $opt4,':ans' => $ans);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $res=$query->execute($parameters);
        return $res;
        
        
        
    }
    
   public function addResult($id,$co,$wr,$un)// adds the  new result to the database 
   {
       $score=$co*2 - $wr*0 ;// here marks =2 for each question -$Wr*0 for negative marks
 
        $sql = "INSERT INTO testresults (studentid,score,correct,wrong,unattempt) VALUES (:id,:sc,:c,:w,:u)";
        $query = $this->db->prepare($sql);
        $parameters = array( ':id' => $id, ':sc' => $score, ':c' => $co, ':w' => $wr, ':u' => $un);
        $res=$query->execute($parameters);
        return $res;
       
   }
   
    public function updateResult($id,$co,$wr,$un)//update the student result in the database
   {
       $score=$co*2 - $wr*0 ;// here marks =2 for each question -$Wr*0 for negative marks
 
         $sql = "UPDATE testresults SET score= :sc, correct = :c, wrong = :w, unattempt = :u WHERE studentid = :id";
        $query = $this->db->prepare($sql);
         $parameters = array( ':id' => $id, ':sc' => $score, ':c' => $co, ':w' => $wr, ':u' => $un);
        $query->execute($parameters);
       
   }
    public function appearedTest($id ) {//used to test whether student is appreared for test which is used to above methods update or addResult
        
            $result = $this->db->prepare("SELECT * FROM testresults WHERE studentid= :id");
            $result->bindParam(':id', $id);
         
            $result->execute();
              $rows = $result->fetch(PDO::FETCH_NUM);
         
           
              if($rows>0)
              {
                  
                  return 1;
              }
              else
              {
                    return 0;
              }
         
    }
   
    
    public function validate($user ,$pass) {//used to validate the student from the database
        
            $result = $this->db->prepare("SELECT * FROM students WHERE collegeid= :us AND password= :pd");
            $result->bindParam(':us', $user);
             $result->bindParam(':pd', $pass);
            $result->execute();
              $rows = $result->fetch(PDO::FETCH_NUM);
         
           
              if($rows>0)
              {
                  
                  return 1;
              }
              else
              {
                    return 0;
              }
         
    }
    
    public function adminValidate($user ,$pass) {//used to validate the admin from the database
        
            $result = $this->db->prepare("SELECT * FROM admin WHERE email= :us AND password= :pd");
            $result->bindParam(':us', $user);
             $result->bindParam(':pd', $pass);
            $result->execute();
              $rows = $result->fetch(PDO::FETCH_NUM);
         
           
              if($rows>0)
              {
                  
                  return 1;
              }
              else
              {
                    return 0;
              }
         
    }  
    

    
    public function studentExist($id)// checks whether student has already registered or not 
    {
        $sql="SELECT * from students where collegeid=:id";
        $query = $this->db->prepare($sql);
         $parameters = array( ':id' => $id);
        $query->execute($parameters);
         $rows = $query->fetch(PDO::FETCH_NUM);
         if($rows>1)
         {
             return 1;
             
         }
         else
         {
             return 0;
         }
        
    }
     public function adminExist($id)//checks whether admin has already registered or not 
    {
        $sql="SELECT * from admin where email=:id";
        $query = $this->db->prepare($sql);
         $parameters = array( ':id' => $id);
        $query->execute($parameters);
         $rows = $query->fetch(PDO::FETCH_NUM);
         if($rows>1)
         {
             return 1;
             
         }
         else
         {
             return 0;
         }
        
    }
   

   
}
