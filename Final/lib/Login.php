<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Owner
 */
class Login extends DB{
    //put your code here
    
    function __construct() {
        $this->setDb();
    }

    public function websitenameTaken( WebsitenameModel $websitenameModel ){
        
        $websitename = $websitenameModel->getWebsitename();
        $isTaken = false;
        
        if ( null !== $this->getDB() ) {
            $dbs = $this->getDB()->prepare('select website from users '
                    . 'where websitename = :websitename limit 1');
            
            $dbs->bindParam(':websitename', $websitename, PDO::PARAM_STR);
                        
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $isTaken = true;
            }
        
         }   
            
       return $isTaken;
 
    }
}
