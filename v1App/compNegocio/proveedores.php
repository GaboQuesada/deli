<?php
@session_start();

if (!empty($_SESSION["usuarioid"]) && $_SESSION["Proveedores"] == 1) {
    
} else {
    header("Location: ../comps/nomodule.php");
}
?>

<!doctype html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php include '../comps/compscss.php'; ?>
        <link rel="stylesheet" href="css/navOptions.css" >







        <title>Proveedores</title>
    </head>
    <body>
        <a id="iraAncla" href="#ancla"></a>
        <input type="hidden" id="tocompare">
        <?php include '../comps/ShowInfo.php'; ?>
        <?php include '../comps/navsuperior.php'; ?>


        <div>
            <div class="caja1 " id="caja1">
                <?php include '../comps/navlateral.php'; ?>
            </div>

            <div class="caja2" id="caja2">
                <div class="navbarlateral">
                    <?php include '../comps/navlateralbar.php'; ?>
                </div>
                <div id="masterbox">

                    <div id="boxcontrol"  class="container-fluid" >
                        <?php include './provedoresNavOption.php'; ?>


                    </div>
                </div>
            </div>
        </div>


        <?php include '../comps/compsjs.php'; ?>

    </body>
</html>



