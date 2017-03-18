
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Pagination 
{
    
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
     
    public function getQues($page) { // returns 10 question,options and  anwers to display to admin all questions
         
        $sql = "SELECT * FROM questions LIMIT $page,10";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    
    
    
    
     public function getQuest($que) {//returns single question to be displayed to the student (exam controller)
         
        $sql = "SELECT quesnum,question,option1,option2,option3,option4 FROM questions where quesnum=:que";
        $query = $this->db->prepare($sql);
         $parameters = array(':que' => $que);
         $query->execute($parameters);
        return $query->fetchAll();
    }
    
   
    
    
        
    
    public function getTotal()// returns total number of questions from the questions table.
    {
        $sql="SELECT count(*)as num FROM questions";
        $query = $this->db->prepare($sql);
        $query->execute();
         return $query->fetchAll();
    }
    
      public function deleteQuestion($que)//used to delete the question from the questions table by admin
    {
        $sql = "DELETE FROM questions WHERE quesnum = :que";
        $query = $this->db->prepare($sql);
        $parameters = array(':que' => $que);


        $query->execute($parameters);
    }
    
    public function updateQuestion($quesnum,$ques,$opt1,$opt2,$opt3,$opt4,$ans) //used to update the question to the questions table by admin
    {
        $sql = "UPDATE questions SET question = :q, option1 = :opt1, option2 = :opt2, option3 = :opt3,option4 = :opt4, answer = :ans WHERE quesnum = :qu";
        $query = $this->db->prepare($sql);
        $parameters = array(':q' => $ques, ':opt1' => $opt1, ':opt2' => $opt2,':opt3' => $opt3,':opt4' => $opt4,':ans' => $ans,':qu' => $quesnum);
        

        $query->execute($parameters);
        
        
    }
    public function updateQuesnum()// It is invoked when question is deleted by admin inorder to update the auto increment ques numthis method is used.
    {
         
            $sql = "ALTER TABLE  questions DROP quesnum";
            $query = $this->db->prepare($sql);
             $query->execute();
             $sql2="ALTER TABLE questions AUTO_INCREMENT = 1";
              $query = $this->db->prepare($sql2);
                 $query->execute();
                    
            $sql = "ALTER TABLE  questions ADD quesnum int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST";
             $query = $this->db->prepare($sql);
               $query->execute();                 
        
        
    }

    
    
      public function getAllAnswers()// returns all the answers used to validate the students answers
    {
         $sql = "SELECT answer FROM questions";
        $query = $this->db->prepare($sql);
      
         $query->execute();
        return $query->fetchAll(PDO::FETCH_COLUMN);
        
        
    }
    public function getTestResults($page)//returns all the student data who attempted the test in admin home
    {
         $sql="SELECT * FROM testresults ORDER BY score DESC LIMIT $page,10";
        $query = $this->db->prepare($sql);
        $query->execute();
         return $query->fetchAll();
        
    }
    public function deleteResult($id)// deletes the student result from the database
    {
        $sql = "DELETE FROM testresults WHERE studentid = :i";
        $query = $this->db->prepare($sql);
        $parameters = array(':i' => $id);


        $query->execute($parameters);
        
    }
    public function getTotalResults()//returns total number of total results from the database
    {
        $sql="SELECT count(*)as num FROM testresults";
        $query = $this->db->prepare($sql);
        $query->execute();
         return $query->fetchAll();
    }
    public function getTotalStudents($page)//it is used to display all the students data along with test results  in all students by adminHome
    {
          $sql="SELECT * from students left join testresults on students.collegeid=testresults.studentid LIMIT $page,10";
        $query = $this->db->prepare($sql);
        $query->execute();
         return $query->fetchAll();
        
    }
    public function countStudents() //returns total number of student from the students table
    {
        $sql="SELECT count(*)as num FROM students";
        $query = $this->db->prepare($sql);
        $query->execute();
         return $query->fetchAll();
        
    }
    public function deleteStudent($id)//deletes the student  registration from the database 
    {
        $sql = "DELETE FROM students WHERE collegeid = :i";
        $query = $this->db->prepare($sql);
        $parameters = array(':i' => $id);
        $query->execute($parameters);
        
    }
    
    
}
