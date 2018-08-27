
<?php


 
    
    
    
    @session_start();

if (!empty($_SESSION["usuarioid"])) {

 class insert {

        private $check = NULL;
        private $sskey = NULL;


        function __construct() {
            echo "En el constructor BaseClass\n";
        }

    }
  

} else {
    header("Location: ../comps/nomodule.php");
}

?>




