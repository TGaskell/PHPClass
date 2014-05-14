<?php

class Passcode {
    //put your code here
    
    private $passcode;
    
    function __construct() {
        $this->setPasscode(filter_input(INPUT_POST, 'passcode'));
    }
    
    public function getPasscode() {
        return $this->passcode;
    }

    public function setPasscode($passcode) {
        $this->passcode = $passcode;
    }
    
    public function isValidPasscode(){
        // shortcut for if else checks to see if true (else) : false
        return ( $this->getPasscode() === Config::PASS_CODE ? true : false );
    }



}