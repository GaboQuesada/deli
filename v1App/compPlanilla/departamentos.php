<?php
@session_start();

if (!empty($_SESSION["usuarioid"]) && $_SESSION["Departamentos"] == 1) {
    unset($_SESSION["agru"]);
    unset($_SESSION["agruv"]);
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
        <link rel="stylesheet" href="css/planilla.css" >

        <title>Hello, world!</title>
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
                        <div class="col-lg-12 ">
                            <!-- Cuerpo -->

                            <nav class="navbar navbar-expand-lg cajaEncabezado">
                                <a class="navbar-brand" href="#">
                                    <img src="iconos/pla_Departamento.png" width="30" height="30" class="d-inline-block align-top" alt="">
                                    Departamentos
                                </a>

                                <button style="color:#000 ; background-color: #555;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentinside" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span style="color:#000;"  class="navbar-toggler-icon"><i class="fas fa-arrow-alt-circle-down"></i></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContentinside">
                                    <form class="form-inline my-2 my-lg-0">

                                        <button  class="btn btn-primary  btn-sm" data-toggle="modal" data-target="#newCat" ><i class="fas fa-plus-square"></i> Agregar</button> 
                                        &numsp;

                                    </form>
                                    <ul class="navbar-nav mr-auto">

                                    </ul>
                                    <form class="form-inline my-2 my-lg-0">

                                        <input type="text" id="actsearch" class="form-control form-control-sm" placeholder="Buscar" aria-label="Username" aria-describedby="basic-addon1">

                                    </form>
                                </div>
                            </nav> 

                            <div  id="actividadesBox"class="mainshowbox mainshowboxStyle">


                            </div>


                            <!--  MODAL INSERT ACTIVIDAD O CARGO -->
                            <div class="modal fade" id="newCat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-body">

                                            <center> <img src="../img/iconos/departamento.png"/></center>
                                            <center><h6 class="modal-title" id="exampleModalLabel"><strong>Nuevo Departamento</strong></h6></center>

                                            <div class="form-group">
                                                <label for="email">Nombre:</label>
                                                <input type="text"  class="form-control"  name="nb" id="aNb">
                                                <p id="isAble" ></p>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Descripción:</label>
                                                <textarea class="form-control" id="aDe" rows="3"></textarea>
                                            </div>

                                        </div>
                                        <div class="modal-footer">


                                            <button  id="aGuardar" class="btn btn-primary btn-sm" > <i class="fas fa-archive"></i> Guardar</button>
                                            <button  id="aCancelar" class="btn btn-secondary btn-sm" data-dismiss="modal" ><i class="fas fa-broom"></i> Cancelar</button>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--  MODAL UPDATE ACTIVIDAD O CARGO -->
                            <div class="modal fade" id="upDateCat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-body">

                                            <center> <img src="../img/iconos/departamento.png"/></center>
                                            <center><h6 class="modal-title" id="exampleModalLabel"><strong>Actualizar Departamento</strong></h6></center>

                                            <div class="form-group">
                                                <label for="email">Nombre:</label>
                                                <input type="text"  class="form-control"  name="nb" id="acNb">
                                                <p id="isAble" ></p>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Descripción:</label>
                                                <textarea class="form-control" id="acDe" rows="3"></textarea>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <input type="hidden"  class="form-control"  name="nb" id="acId">



                                            <button  id="acGuardar" class="btn btn-primary btn-sm" ><i class="far fa-edit"></i> Modificar</button>

                                            <button  id="acCancelar" class="btn btn-secondary btn-sm" data-dismiss="modal" ><i class="fas fa-broom"></i> Cancelar</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Cuerpo -->                    
                        </div>
                    </div>
                </div>
            </div>  

        </div>


        <?php include '../comps/compsjs.php'; ?>
        <script src="controler/insertDepartamentosBox.js" ></script>
        <script src="controler/getDepartamentosBlock.js" ></script>
        <script src="controler/deletedDepartamentos.js" ></script>
        <script src="controler/putInModalDepartamentos.js" ></script>
        <script src="controler/upDateDepartamentos.js" ></script>
        <script src="js/Rolessize.js" ></script>




    </body>
</html>