<?php

@session_start();

//if (!empty($_SESSION["usuarioid"]) && $_SESSION["Proveedores"] == 1) {
include '../../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();

try {


    date_default_timezone_set('America/Costa_Rica');
    $pfe = date("Y-m-d ");
    $nullimg = "user.png";

    $stmt = $conn->prepare("CALL PROVEEDORESinsert(:no,:img,:des,:no2, :ce, :fe )");
    $stmt->bindParam(':no', $_POST['pno']);
    $stmt->bindParam(':no2', $_POST['pno2']);
    $stmt->bindParam(':des', $_POST['pdes']);
    $stmt->bindParam(':fe', $pfe);
    if ($_FILES['pimu']["name"] == "") {
        $stmt->bindParam(':img', $nullimg);
    } else {
        $stmt->bindParam(':img', $_FILES['pimg']["name"]);
    }
    $stmt->bindParam(':ce', $_POST['pce']);




    $sourcePath = $_FILES['pimg']['tmp_name'];
    $targetPath = "../../compSesion/proImg/" . $_FILES['pimg']["name"];
    move_uploaded_file($sourcePath, $targetPath);



    $stmt->execute();

    $respuesta['estado'] = "1";
    $respuesta['mensajelog'] = "Consulta Exitosa (insert)";
    $respuesta['mensaje'] = "Se ha insertado el resgistro con exito";
    header('Content-type: application/json; charset=utf-8');
    print json_encode($respuesta);
} catch (PDOException $e) {

    $respuesta['estado'] = "0";
    $respuesta['mensajelog'] = $e->getMessage();
    $respuesta['mensaje'] = "Ha ocurrido un error.";
    header('Content-type: application/json; charset=utf-8');
    print json_encode($respuesta);
}
//} else {
//   header("Location: ../comps/nomodule.php");
//}
?>


