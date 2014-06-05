<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customepage
 *
 * @author TGaskell
 */
class Custompage extends DB {
    //put your code here
    public function __construct() {
        $this->setDb();
    }
    
     public function save(CustompageModel $CustompageModel) {
        $result = false;
        
        $title = $CustompageModel->getTitle();
        $theme = $CustompageModel->getTheme();
        $address = $CustompageModel->getAddress();
        $phone = $CustompageModel->getPhone();
        $email = $CustompageModel->getEmail();
        $content = $CustompageModel->getContent();
               
         if ( null !== $this->getDB() ) {
            $CustompageModel = $this->getDB()->prepare('insert into about_page set title = :title, theme = :theme, address = :address, phone = :phone, email = :email, content = :content');
            $CustompageModel->bindParam(':title', $title, PDO::PARAM_STR);
            $CustompageModel->bindParam(':theme', $theme, PDO::PARAM_STR);
            $CustompageModel->bindParam(':address', $address, PDO::PARAM_STR);
            $CustompageModel->bindParam(':phone', $phone, PDO::PARAM_STR);
            $CustompageModel->bindParam(':email', $email, PDO::PARAM_STR);
            $CustompageModel->bindParam(':content', $content, PDO::PARAM_STR);
            
            if ( $CustompageModel->execute() && $CustompageModel->rowCount() > 0 ) {
                $result = intval($this->getDB()->lastInsertId());
            } else {
                $error = $CustompageModel->errorInfo();
                error_log($error[2], 3, "logs/errors.log");
            }
        
         }   
        
        return $result;
    }
 
}