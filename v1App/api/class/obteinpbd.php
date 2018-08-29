<?php

class Obteinpbd{
    private $params = NULL;
    private $nbPamc = NULL;
    
    function __construct($params, $nbPamc) {
        $this->setParams($params);
        $this->setNbPamc($nbPamc);
    }

    
    function getValidSendString(){
        
        
        
        
    }
    
    function getParams() {
        return $this->params;
    }

    function getNbPamc() {
        return $this->nbPamc;
    }

    function setParams($params) {
        $this->params = $params;
    }

    function setNbPamc($nbPamc) {
        $this->nbPamc = $nbPamc;
    }



}