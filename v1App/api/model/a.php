<?php

include '../../bd/connect.php';
$conexion = new Connect();
$conn = $conexion->conect();


$dpost = $_POST;
$dfiles = $_FILES;
$params = unserialize(stripslashes($_POST['prm']));
$pamcbd = $_POST['pan'];

$datostotales = array();                                                                   
$datostotales[0] = $dpost;                                                                
$datostotales[1] = $dfiles;
$datostotales[2] = $params;
try {
    $stmt = $conn->prepare("CALL pruebaInsertnb(:pnb,:pap)");
    $stmt->bindParam(':pnb', $_POST['pnb']);
    $stmt->bindParam(':pap', $_POST['pap']);
    $stmt->execute();

    $respuesta['estado'] = "ok01";
    $respuesta['datos'] = $datostotales;
    $respuesta['mensaje'] = "Consulta Exitosa.";

    header('Content-type: application/json; charset=utf-8');
    $jsonfile = json_encode($respuesta);
    print $jsonfile;
} catch (PDOException $e) {

    $respuesta['estado'] = "0";
    $respuesta['datos'] = $datostotales;
    header('Content-type: application/json; charset=utf-8');
    $jsonfile = json_encode($respuesta);
    print $jsonfile;
}
?>

