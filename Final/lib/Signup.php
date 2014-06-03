<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Signup
 *
 * @author GFORTI
 */
class Signup extends DB {
    //put your code here
    
    public function __construct() {
        $this->setDb();
    }
    
     public function save( SignupModel $SignupModel) {
        $result = false;
        
        $website = $SignupModel->getWebsite(); 
        $email = $SignupModel->getEmail();
        $password = sha1($SignupModel->getPassword());
               
         if ( null !== $this->getDB() ) {
            $SignupModel = $this->getDB()->prepare('insert into saas set website = :website, email = :email, password = :password');
            $SignupModel->bindParam(':website', $website, PDO::PARAM_STR);
            $SignupModel->bindParam(':email', $email, PDO::PARAM_STR);
            $SignupModel->bindParam(':password', $password, PDO::PARAM_STR);
            
            if ( $SignupModel->execute() && $SignupModel->rowCount() > 0 ) {
                $result = intval($this->getDB()->lastInsertId());
            } else {
                $error = $SignupModel->errorInfo();
                error_log($error[2], 3, "logs/errors.log");
            }
        
         }   
        
        return $result;
    }
    

   
}
