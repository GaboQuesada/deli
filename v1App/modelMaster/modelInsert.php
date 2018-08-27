
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


        function __construct($dat , $fil) {
            
            $this->setCheck($dat);
            
            $cos =$this->getCheck();
            echo $cos['pimu'];
                    
            
            
            //if($this->getCheck() === "on"){
                
           //     $this->Ondafi = new sifiles($dat, $fil);
            //}
            //else{
            //    $this->Offdafil = new nofiles($dat);
            //}
          
            
        }
        
        function getexpress(){
            echo "<br>Los datos de entrada fueron:<br>";
            print_r($this->Ondafi->getDatos());
            echo "<br>Los archivos de entrada fueron:<br>";
            print_r($this->Ondafi->getFiles());
            
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




