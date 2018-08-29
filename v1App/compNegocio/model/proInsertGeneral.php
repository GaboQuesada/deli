<?php

//@session_start();

//if (!empty($_SESSION["usuarioid"]) && $_SESSION["Proveedores"] == 1) {
include '../../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();

try {


    date_default_timezone_set('America/Costa_Rica');
    $pfe = date("Y-m-d");
    $pval = "no";
    if ($_FILES['pimg']["name"] == "") {
        $pval ="imagen.png";
    } else {
        $pval=$_FILES['pimg']["name"];
    }

    $stmt = $conn->prepare("CALL PROVEEDORESinsert(:no,:img,:des,:no2, :ce, :fe )");
    $stmt->bindParam(':no', $_POST['pno']);
    $stmt->bindParam(':no2', $_POST['pno2']);
    $stmt->bindParam(':des', $_POST['pdes']);
    $stmt->bindParam(':fe', $pfe);
   $stmt->bindParam(':img', $pval);
   
    $stmt->bindParam(':ce', $_POST['pce']);




    //$sourcePath = $_FILES['pimg']['tmp_name'];
    //$targetPath = "../img/" . $_FILES['pimg']["name"];
   // move_uploaded_file($sourcePath, $targetPath);



    $stmt->execute();

    $respuesta['estado'] = $_POST['pno'];
    $respuesta['mensajelog'] = "Consulta Exitosa (insert)";
    $respuesta['mensaje'] = "Se ha insertado el resgistro con exito";
    header('Content-type: application/json; charset=utf-8');
    print json_encode($respuesta);
} catch (PDOException $e) {

    $respuesta['estado'] = $_POST['pno'];
    $respuesta['mensajelog'] = $e->getMessage();
    $respuesta['mensaje'] = "Ha ocurrido un error.";
    header('Content-type: application/json; charset=utf-8');
    print json_encode($respuesta);
}
//} else {
//   header("Location: ../comps/nomodule.php");
//}
?>


