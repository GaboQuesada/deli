<?php
@session_start();

if (!empty($_SESSION["usuarioid"]) && $_SESSION["Agregar a Planilla"] == 1) {
    
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
        <input type="hidden" id="touse" value="<?php
        if (isset($_SESSION["agru"])) {
            if ($_SESSION["agru"] == 1) {
                echo "on";
            } else {
                echo "off";
            }
        } else {
            echo "off";
        }
        ?>">


        <?php include '../comps/ShowInfo.php'; ?>
        <?php include '../comps/navsuperior.php'; ?>


        <div>
            <div class="caja1 " id="caja1">

                <?php
                if (isset($_SESSION["agru"])) {
                    if ($_SESSION["agru"] == 1) {
                        $_SESSION["agruv"] = 1;
                        include '../comps/navlateral.php';
                    } else {
                        include '../comps/navlateral.php';
                    }
                } else {
                    include '../comps/navlateral.php';
                }
                ?>
            </div>
            <div class="caja2" id="caja2">
                <div class="navbarlateral">
                    <?php include '../comps/navlateralbar.php'; ?>
                </div
                <div id="masterbox">
                    <div id="boxcontrol"  class="container-fluid" >
                        <div class="col-lg-12 ">
                            <!-- Cuerpo -->

                            <nav class="navbar navbar-expand-lg cajaEncabezado">
                                <a class="navbar-brand" href="#">
                                    <img src="iconos/pla_Agregar.png" width="30" height="30" class="d-inline-block align-top" alt="">
                                    Planilla
                                </a>

                                <button style="color:#000 ; background-color: #555;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentinside" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span style="color:#000;"  class="navbar-toggler-icon"><i class="fas fa-arrow-alt-circle-down"></i></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContentinside">
                                    <form class="form-inline my-2 my-lg-0">

                                        <button  class="btn btn-primary  btn-sm" data-toggle="modal" data-target="#NuevaPlanilla" ><i class="fas fa-plus-square"></i> Agregar</button> 
                                        &numsp;

                                    </form>
                                    <ul class="navbar-nav mr-auto">

                                    </ul>
                                    <form class="form-inline my-2 my-lg-0">

                                        <input type="text" id="actsearch" class="form-control form-control-sm" placeholder="Buscar" aria-label="Username" aria-describedby="basic-addon1">

                                    </form>
                                </div>
                            </nav> 

                            <div  id="actividadesBox" class="mainshowbox mainshowboxStyle">


                            </div>

                        </div>
                        <br>
                        <hr>
                        <div class="col-lg-12 rounded" style=" padding: 2px; color:black;" >

                            <div class=" col-lg-11 nav justify-content-center rounded">
                                <hr>
                                <div>
                                    <label> Orden Alfabetico</label>
                                    <select style="width:89px;" class="custom-select form-control-sm " id="order">
                                        <option selected="true" value="A">A -> Z</option>
                                        <option value="D">Z -> A</option>
                                    </select> 
                                </div>
                                &numsp;
                                <div  style="display: inline-block;">
                                    <label> Cantidada mostrada</label>

                                    <select style="width:89px;" class="custom-select form-control-sm " id="cantbloques">
                                        <option value="5" >5</option>
                                        <option value="10" selected="true">10</option>
                                        <option value="15" >15</option>
                                        <option value="20" >20</option>
                                        <option value="25" >25</option>
                                        <option value="50" >50</option>
                                    </select> 
                                </div>
                                &numsp;
                                <div style="display: inline-block;"><p id="total"> </p></div>
                                &numsp;
                                <div  style="display: inline-block;"><ul id="bloques" class="pagination pagination-sm"></ul></div>

                            </div>
                        </div>
                        <hr>
                        <p id="contador"></p>

                    </div>

                </div>





                <!--  MODAL Nueva planilla -->
                <div class="modal fade" id="NuevaPlanilla" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form id="frmFormulario" enctype="multipart/form-data"> 
                                <div class="modal-body">

                                    <div class="col-lg-12">

                                        <center> <img src="../img/iconos/planilla.png"/></center>
                                        <center><h6 class="modal-title" id="exampleModalLabel"><strong>INSERTAR</strong></h6></center>

                                        <hr>
                                        <center>
                                            <div class="form-group">
                                                <label style="float: left" class="labelsi" for="email"><i class="fas fa-users"></i> Cédula :</label>
                                                <input type="text"  class="form-control form-control-sm"   id="ce">
                                                <p id="isAble" ></p>
                                            </div>
                                            <div class="form-group">
                                                <label  style="float: left"  class="labelsi" for="email"><i class="fas fa-users"></i> Nombre:</label>
                                                <input type="text"  class="form-control form-control-sm"  id="no">
                                                <p id="isAble" ></p>
                                            </div>

                                            <div class="form-group">
                                                <label  style="float: left"  class="labelsi" for="email"><i class="fas fa-address-card"></i> Primer apellido:</label>
                                                <input type="text"  class="form-control form-control-sm"   id="ap1">
                                                <p id="isAble" ></p>
                                            </div>

                                            <div class="form-group">
                                                <label  style="float: left"  class="labelsi" for="email"><i class="fas fa-address-card"></i> Segundo apellido:</label>
                                                <input type="text"  class="form-control form-control-sm"   id="ap2">
                                                <p id="isAble" ></p>
                                            </div>

                                            <div class="form-group">
                                                <label  style="float: left"  class="labelsi" for="email"><i class="fas fa-calendar-alt"></i> Fecha Nacimiento:</label>
                                                <input type="date"  class="form-control form-control-sm"   id="fn">
                                                <p id="isAble" ></p>
                                            </div>



                                            <div class="form-group ">
                                                <label style="float: left"  class="labelsi" for="email"><i class="fas fa-building"></i> Departamento:</label>
                                                <div class="input-group">

                                                    <select class="custom-select  form-control-sm" id="de">

                                                    </select>
                                                    <div class="input-group-append">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label  style="float: left"  class="labelsi" for="email"><i class="fas fa-paint-brush"></i> Activiad o cargo:</label>
                                                <div class="input-group">

                                                    <select class="custom-select form-control-sm" id="ca">


                                                    </select>
                                                    <div class="input-group-append">

                                                    </div>
                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <center><div class="modal-footer">
                                            <button id="btnGuardaPla" class="btn btn-primary btn-sm"><i class="fas fa-archive"></i> Guardar</button>
                                            <button  id="aCancelar" class="btn btn-secondary btn-sm" data-dismiss="modal" ><i class="fas fa-broom"></i> Cancelar</button>

                                        </div></center>
                                </div>
                            </form>




                        </div>
                    </div>
                </div>


                <!-- Actualizar Planilla -->
                <div class="modal fade" id="UpdatePlanilla" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <div class="modal-body">

                                <center> <img src="iconos/pla_Agregar.png"/></center>
                                <center><h6 class="modal-title" id="exampleModalLabel"><strong>Actualizar Planilla</strong></h6></center>

                                <center>
                                    <form id="frmFormulario" class="col-md-11" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="labelsi" style="float: left" for="email"><i class="fas fa-users"></i> Cédula :</label>
                                            <input type="text"  class="form-control form-control-sm"   id="ceu">
                                            <p id="isAble" ></p>
                                        </div>
                                        <div class="form-group">
                                            <label class="labelsi" style="float: left" for="email"><i class="fas fa-users"></i> Nombre:</label>
                                            <input type="text"  class="form-control form-control-sm"  id="nou">
                                            <p id="isAble" ></p>
                                        </div>

                                        <div class="form-group">
                                            <label class="labelsi" style="float: left" for="email"><i class="fas fa-address-card"></i> Primer apellido:</label>
                                            <input type="text"  class="form-control form-control-sm"   id="ap1u">
                                            <p id="isAble" ></p>
                                        </div>

                                        <div class="form-group">
                                            <label class="labelsi" style="float: left" for="email"><i class="fas fa-address-card"></i> Segundo apellido:</label>
                                            <input type="text"  class="form-control form-control-sm"   id="ap2u">
                                            <p id="isAble" ></p>
                                        </div>

                                        <div class="form-group">
                                            <label class="labelsi" style="float: left" for="email"><i class="fas fa-calendar-alt"></i> Fecha Nacimiento:</label>
                                            <input type="date"  class="form-control form-control-sm"   id="fnu">
                                            <p id="isAble" ></p>
                                        </div>



                                        <div class="form-group ">
                                            <label class="labelsi"style="float: left" for="email"><i class="fas fa-building"></i> Departamento:</label>


                                            <select class="custom-select form-control-sm " id="deu">

                                            </select>

                                        </div>

                                        <div class="form-group">
                                            <label class="labelsi" style="float: left" for="email"><i class="fas fa-paint-brush"></i> Activiad o cargo:</label>


                                            <select class="custom-select form-control-sm" id="cau">


                                            </select>

                                        </div>

                                    </form>
                                </center>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden"  class="form-control"  name="nb" id="acIdu">



                                <button  id="acGuardarurr" class="btn btn-primary btn-sm" ><i class="far fa-edit"></i> Modificar</button>

                                <button  id="acCancelarurr" class="btn btn-secondary btn-sm" data-dismiss="modal" ><i class="fas fa-broom"></i> Cancelar</button>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>






    <?php include '../comps/compsjs.php'; ?>
    <script src="controler/personasgetAllFull.js"></script>
    <script src="controler/putInModalUpDatePlanilla.js"></script>
    <script src="controler/personaModificar.js"></script>
    <script src="controler/getActividades.js"></script>
    <script src="controler/getDepartamentos.js"></script>
    <script src="controler/personaEliminar.js"></script>
    <script src="controler/personaInsert.js"></script>
    <script src="controler/personaGetBySearch.js"></script>
    <script src="../compSistema/controler/usuariogetfrompersona.js"></script>
    <script src="js/Rolessize.js"></script>



</body>
</html>