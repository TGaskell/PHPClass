<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Signup2
 *
 * @author Owner
 */
class Signup2 {
   
    protected $errors = array();
    
    private $email;
    private $username;
    private $password;
    private $confirmPassword;
    

   public function __construct() {
        $this->setEmail( filter_input(INPUT_POST, 'email') );
        $this->setUsername( filter_input(INPUT_POST, 'username') );
        $this->setPassword(filter_input(INPUT_POST, 'password'));
        $this->setConfirmPassword(filter_input(INPUT_POST, 'confirmPassword'));        
    }
    
    
     /**
    * A method to check if a posted email is valid.
    * Adds a custom message to the errors list key["email"]
    *
    * @return boolean
    */ 
    public function entryIsValid(){
        $this->emailEntryIsValid();
        $this->usernameEntryIsValid();
        $this->passwordEntryIsValid();       
        return ( count($this->errors) ? false : true );
    }
    
    /**
    * A method to check if a posted username is valid.
    * Adds a custom message to the errors list key["username"]
    *
    * @return boolean
    */    
    public function usernameEntryIsValid() {
        $userName = $this->getUsername();
        if(empty($userName)){
            $this->errors["username"] = "Required Feild"."  Please enter a username";
        }
        else if(!validator::nameIsValid($this->getUsername())){
            $this->errors["username"]="Entry Error"."Username is not valid";
        }
        
        return ( empty($this->errors["username"]) ? true : false ) ;
    }
    
    /**
    * A method to check if a posted password is valid.
    * Adds a custom message to the errors list key["username"]
    *
    * @return boolean
    */    
    public function passwordEntryIsValid() {
        $password = $this->getPassword();
        $confirmpassword = $this->getConfirmPassword();
        $passwordlength= strlen($password);
                
        if(empty($password)||($passwordlength < 7)){
        $this ->errors["password"] = "Required Feild"."  Please enter a valid password";
        }
        else if($this->getConfirmpassword()== $this->getPassword()){
            $this->errors ["password"] = "Entry Error"." Password/Confirm Password must match.";
        }
        
        return ( empty($this->errors["password"]) ? true : false ) ;
    }
    
    
    /**
    * A method to check if a posted email is valid.
    * Adds a custom message to the errors list key["email"]
    *
    * @return boolean
    */    
    public function emailEntryIsValid() {
         $email = $this->getEmail();
         if ( empty($email) ) {
            $this->errors["email"] = "Email is missing.";
         } else if ( !Validator::emailIsValid($email) ) {
            $this->errors["email"] = "Email is not valid.";                
         } 
        
        return ( empty($this->errors["email"]) ? true : false ) ;
    }
    
    
    
    /**
    * A method to get email
    *
    * @return String
    */ 
    public function getEmail() {
        return $this->email;
    }

    /**
    * A method to set email
    *
    * @param string $email
    * 
    * @return void
    */ 
    private function setEmail($email) {
        $this->email = $email;
    }


    
    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getConfirmPassword() {
        return $this->confirmPassword;
    }

    private function setUsername($username) {
        $this->username = $username;
    }

    private function setPassword($password) {
        $this->password = $password;
    }

    private function setConfirmPassword($confirmPassword) {
        $this->confirmPassword = $confirmPassword;
    }
    
    
    /**
    * A method to return all errors found in the post
    *
    * @return array
    */  
    public function getErrors() {
        return $this->errors;
    }
    
       /**
    * A static method to check if a Post request has been made.
    *    
    * @return boolean
    */    
    public function isPostRequest() {
        return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
    }
}
