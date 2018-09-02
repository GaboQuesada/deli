<?php

class Comodo {

    private $params = NULL;
    private $nbPamc = NULL;

    function __construct($params, $nbPamc) {
        $this->setParams($params);
        $this->setNbPamc($nbPamc);
    }

    function getValidSendString() {
        $tan = count($this->getParams());
        $a = "CALL ";
        $a .= $this->getNbPamc();
        $a .= "( ";

        if ($tan == 1) {
            $a .= ":";
            $a .= $this->getParams()[0];
            $a .= " )";

            return $a;
        } else {

            for ($i = 0; $i < $tan; $i++) {

                if ($i == $tan - 1) {

                    $a .= " :";
                    $a .= $this->getParams()[$i];
                    $a .= " )";
                } else {
                    $a .= " :";
                    $a .= $this->getParams()[$i];
                    $a .= ",";
                }
            }

            return $a;
        }
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

?>
