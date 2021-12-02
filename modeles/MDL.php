<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class MDL { 

    private $gatewayCompte;
    private $gatewayBatiment;

    function __construct() {
        global $dsn,$password,$user;
        $this->gatewayCompte= new CompteGateway(new Connection($dsn,$user,$password));
        $this->gatewayBatiment= new BatimentGateway(new Connection($dsn,$user,$password));
    } 

    
    
    
    function deconnexion(){
        session_unset();
        session_destroy();
        $_SESSION=array();
        if(isset($_COOKIE['login']))
        {
            unset($_COOKIE['login']);
            setcookie('login', NULL, -1);            
        }
    }
    
    
    static function isConnected()
    {
        if (isset($_SESSION['login'])){
            $id= $_SESSION['login'];
            return new CompteSession($id);
        }
        else if (isset($_COOKIE['login'])){
            $id= ($_COOKIE['login']);            
            return new CompteSession($id);
        }
        else return NULL;
    }
    
    
   
    
    
}
