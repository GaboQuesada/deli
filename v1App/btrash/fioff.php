
<?php

    @session_start();

if (!empty($_SESSION["usuarioid"])) {

 class nofiles {

        private $datos = array();

        function __construct($dat) {
            
            $this->setDatos($dat);
    
        }

        function getDatos() {
            return $this->datos;
        }
        
        function setDatos($datos) {
            $this->datos = $datos;
        }

   
    }
  

} else {
    header("Location: ../comps/nomodule.php");
}

?>
