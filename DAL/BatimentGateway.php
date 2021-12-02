<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BatimentGateway
 *
 * @author 
 */
class BatimentGateway {
    
    
    private $con;
        
    function __construct(Connection $con){
        $this->con=$con;
    }
}

