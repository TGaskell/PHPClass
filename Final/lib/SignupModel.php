<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SignupModel
 *
 * @author TGaskell
 */
class SignupModel {
    //put your code here
    
    
    private $website;
    private $email;
    private $password;
    
    
    
     function __construct($paramArr = array()) {        
        $this->map($paramArr);
    }

    
    public function map($paramArr) {
        
        if ( ! is_array($paramArr) ) {
            return false;
        }
        
        if ( array_key_exists('email', $paramArr) ) {
            $this->setEmail($paramArr['email']);
        }
        if ( array_key_exists('website', $paramArr) ) {
            $this->setWebsite($paramArr['website']);
        }
        if ( array_key_exists('password', $paramArr) ) {
            $this->setPassword($paramArr['password']);
        }
                
    }
    
    
    public function getEmail() {
        return $this->email;
    }

    public function getWebsite() {
        return $this->website;
    }

    public function getPassword() {
        return $this->password;
    }

    
    public function setEmail($email) {
        $this->email = $email;
    }

    public function setWebsite($website) {
        $this->website = $website;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    
}
