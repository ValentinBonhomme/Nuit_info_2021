<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CompteSession
 *
 * @author valen
 */
class CompteSession {
    private $login;
     
    function __construct($login) {
        $this->login = $login;
    }
    
    function getLogin() {
       return $this->login;
    }
}
