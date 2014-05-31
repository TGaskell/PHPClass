<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WebsiteModel
 *
 * @author TGaskell
 */
class WebsiteModel {
    //put your code here
    
    private $websitename;
    
    public function getWebsitename() {
        return $this->websitename;
    }

    public function setWebsitename($websitename) {
        if (is_string ($websitename) && !empty($websitename) && strlen($websitename)> 3){
        $this->websitename = $websitename;
        }
    }
}
