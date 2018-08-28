
<?php

@session_start();

if (!empty($_SESSION["usuarioid"])) {

    include './fioff.php';
    include './fion.php';

    class insert {

        private $check = array();
        private $sskey = NULL;
        private $Ondafi = NUll;
        private $Offdafil = NUll;

        function __construct($dat, $fil) {

            $this->setCheck($dat);

            if ($this->getCheck()['pnus'] === "on") {

                $this->Ondafi = new sifiles($dat, $fil);
            } else {
                $this->Offdafil = new nofiles($dat);
            }
        }

        function getexpress() {

            if ($this->getCheck()['pnus'] === "on") {

                echo "<br>Los datos de entrada fueron:<br>";
                print_r($this->Ondafi->getDatos());
                echo "<br>Los archivos de entrada fueron:<br>";
                print_r($this->Ondafi->getFiles());
            } else {
                echo "<br>Los datos de entrada fueron:<br>";
                print_r($this->Offdafil->getDatos());
            }
        }

        function getResponse() {

            $respuesta['estado'] = "1";
            $respuesta['mensajelog'] = "Consulta Exitosa (insert)";
            $respuesta['mensaje'] = "Se ha insertado el resgistro con exito";
            header('Content-type: application/json; charset=utf-8');
            print json_encode($respuesta);
        }

        function getCheck() {
            return $this->check;
        }

        function getSskey() {
            return $this->sskey;
        }

        function setCheck($check) {
            $this->check = $check;
        }

        function setSskey($sskey) {
            $this->sskey = $sskey;
        }

        function getOndafi() {
            return $this->Ondafi;
        }

        function getOffdafil() {
            return $this->Offdafil;
        }

        function setOndafi($Ondafi) {
            $this->Ondafi = $Ondafi;
        }

        function setOffdafil($Offdafil) {
            $this->Offdafil = $Offdafil;
        }

    }

} else {
    header("Location: ../comps/nomodule.php");
}
?>




