
<?php

    @session_start();

if (!empty($_SESSION["usuarioid"])) {

 class sifiles {


        private $datos = array();
        private $files = array();


        function __construct($dat , $fil) {
            
            $this->setDatos($dat);
            $this->setFiles($fil);
            
        }

        function getDatos() {
            return $this->datos;
        }

        function getFiles() {
            return $this->files;
        }

        function setDatos($datos) {
            $this->datos = $datos;
        }

        function setFiles($files) {
            $this->files = $files;
        }

    
    }
  

} else {
    header("Location: ../comps/nomodule.php");
}

?>
