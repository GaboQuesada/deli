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
        <link rel="stylesheet" href="css/stepform.css" >


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
                        <div class="container-fluid stepBoxcontainer" >
                            <div class="row">
                                <div class="col-sm stepactive">
                                    <strong>Paso 1:</strong> Datos del Proveedor <i class="fas fa-arrow-circle-right"></i>
                                </div>
                                <div class="col-sm stepwait">
                                    <strong>Paso 2:</strong> Contacto del proveedor
                                </div>
                                <div class="col-sm stepwait">
                                    <strong>Paso 3:</strong> Agentes y responsables
                                </div>

                                <div class="col-sm stepwait">
                                    <strong>Paso 4:</strong> Productos
                                </div>
                            </div>
                        </div>

                        <div class="stepContentContainer">
                            <div id="step1" class="stepContentActive">
                                <form enctype="multipart/form-data" method="post" name="frmstep1">
                                    <div class="container-fluid" style="min-height: 480px;">
                                        <div class="row">
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nombre</label>
                                                    <input type="email" class="form-control btn-sm" id="pnb" name="pnb" aria-describedby="emailHelp" placeholder="Agregar nombre">
                                                    <small id="emailHelp" class="form-text text-muted">Puede ser el nombre jurídico o de fantasía.</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Apodo o sobre nombre </label>
                                                    <input type="email" class="form-control btn-sm" id="pnb2" name="pnb2" aria-describedby="emailHelp" placeholder="Agregar Apodo, característica  ">
                                                    <small id="emailHelp" class="form-text text-muted">Puede estar vacío o puede servir para identificar más rápido al proveedor, puede ser algo característico que te lo recuerde. </small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Cédula</label>
                                                    <input type="email" class="form-control btn-sm" id="pce" name="pce" aria-describedby="emailHelp" placeholder="Agregar cédula">
                                                    <small id="emailHelp" class="form-text text-muted">Debe ser jurídica o física acorde al tipo de proveedor.</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Descripción</label>
                                                    <textarea class="form-control" id="pdes" name="pdes" rows="3"></textarea>
                                                    <small id="emailHelp" class="form-text text-muted">Puede estar vacío.</small>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <p>Imagen o logo del proveedor.</p>
                                                <center><img src="../img/imagen.png" id="pimgv" name="pimgv" width="250" height="250"/></center>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nombre</label>
                                                    <input type="file" class="form-control " id="pimg" name="pimg" >
                                                    <small id="emailHelp" class="form-text text-muted">Puede estar vacío.</small>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="alert alert-info" role="alert">
                                                    Es muy importante que la información del proveedor sea correcta.
                                                </div>
                                                <div class="alert alert-warning" role="alert">
                                                    Para agregar el logo del proveedor es responsabilidad del usuario del sistema tomar las medidas respectivas.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md">
                                                <p><strong>Paso actual:</strong> Datos del proveedor.</p>
                                                <button type="button" id="btng1" name="btng1" class="btn btn-primary btn-block btn-sm">GUARDAR Y CONTINUAR</button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="step2" class="stepContentwait"> 
                                dos
                            </div>
                            <div id="step3" class="stepContentwait">
                                tres
                            </div>

                        </div>




                    </div>
                </div>
            </div>
        </div>


        <?php include '../comps/compsjs.php'; ?>
        <script src="controler/proInsert.js"></script>
    </body>
</html>



