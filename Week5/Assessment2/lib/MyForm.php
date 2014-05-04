<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyForm
 *
 * @author Owner
 */
class MyForm {
    //put your code here
    
    private $fullname,
            $state,
            $comments;
    
    function __construct() {
        $this->setFullname(filter_input(INPUT_POST, 'fullname'));
        $this->setComments(filter_input(INPUT_POST, 'comments'));
        $this->setState(filter_input(INPUT_POST, 'state'));
        
        
    }

       /**
    * A static method to check if a Post request has been made.
    *    
    * @return boolean
    */    
    public function isPostRequest() {
        return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
    }
    
    public function getDate(){
        
        return date("m d Y");        
    }
    
    public function getFullname() {
        return $this->fullname;
    }

    public function getState() {
        return $this->state;
    }

    public function getComments() {
        return $this->comments;
    }

    public function setFullname($fullname) {
        $this->fullname = $fullname;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function setComments($comments) {
        $this->comments = $comments;
    }


    
}
