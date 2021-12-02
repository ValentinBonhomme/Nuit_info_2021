<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Compte
 *
 * @author 
 */
class Compte {
    private $login;
    private $active;
    private $cle;
    private $password;
    
    function __construct($login,$password,$active,$cle) {
        $this->login = $login;
        $this->active = $active;
        $this->cle = $cle;
        $this->password=$password;
    }
    
   
    
    function getLogin() {
        return $this->login;
    }
    
    
    function getPassword() {
        return $this->password;
    }
    
    function getActive() {
        return $this->active;
    }
    function getCle() {
        return $this->cle;
    }
}
