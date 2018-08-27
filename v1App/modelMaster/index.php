
<?php

@session_start();

if (!empty($_SESSION["usuarioid"])) {

    echo "<center>";
    echo "<h3>SERVER DELIAPP <strong>v1App</strong></h3><hr>";
    echo "APP:Deliapp";
    echo "<br>";
    echo "SesKey:Off";
    echo "</center>";
    echo "<br>";
    echo "shy-cripto: Calipso: 22269955pkklg";
    echo "<hr>";
} else {
    header("Location: ../comps/nomodule.php");
}
?>