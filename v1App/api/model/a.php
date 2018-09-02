<?php

include '../../bd/connect.php';
include '../class/comodo.php';
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

$como = new Comodo($params, $pamcbd);


try {

    $cadena = $como->getValidSendString();
    $stmt = $conn->prepare($cadena);



    for ($i = 0; $i < 2; $i++) {
        $calve = ':' . $params[$i];
        $valor = $_POST[$params[$i]];
        $stmt->bindParam($calve, $valor);
    }

    $stmt->execute();

    $respuesta['estado'] = "ok01";
    $respuesta['datos'] = $datostotales;
    $respuesta['mensaje'] = "Consulta Exitosa.";
    $respuesta['prmh'] = $como->getValidSendString();


    header('Content-type: application/json; charset=utf-8');
    $jsonfile = json_encode($respuesta);
    print $jsonfile;
} catch (PDOException $e) {

    $respuesta['estado'] = "0";
    $respuesta['datos'] = $datostotales;
    $respuesta['prmh'] = $como->getValidSendString();
    header('Content-type: application/json; charset=utf-8');
    $jsonfile = json_encode($respuesta);
    print $jsonfile;
}
?>

