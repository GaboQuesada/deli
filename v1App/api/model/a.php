<?php


                                             // array indexado
$dpost = $_POST;
$dfiles = $_FILES;
$params= unserialize(stripslashes($_POST['prm']));

$datostotales =  array();                                                                      // incizlizando una variable como array
$datostotales[0] = $dpost;                                                                  // agregando elementos
$datostotales[1] = $dfiles;
$datostotales[2] = $params;


$respuesta['estado'] = "1";
$respuesta['datos']= $datostotales;
$respuesta['mensaje'] = "Consulta Exitosa.";

header('Content-type: application/json; charset=utf-8');
$jsonfile = json_encode($respuesta);
print $jsonfile;
?>