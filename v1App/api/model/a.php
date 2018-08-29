<?php


$datos = array("nombre"=>"Gabo","apellidos"=>array("Quesada","Sanchez"));                      // array asociativo
$datosf= ["fn"=> 1991, "dn"=>"Lunes" ];
$datos2 = ["edad"=>"27","data"=>$datosf];                                                      // array asociativo
$datos3 = array("foo", "bar", "hello", "world");                                               // array indexado
$dpost = $_POST;
$dfiles = $_FILES;
$conts = unserialize(stripslashes($_POST['pc']));

$datostotales =  array();                                                                      // incizlizando una variable como array
$datostotales[0] = $datos;                                                                     // agregando elementos
$datostotales[1] = $datos2;
$datostotales[2] = $datos3;
$datostotales[3] = $dpost;
$datostotales[4] = $dfiles;
$datostotales[5] = $conts;



$respuesta['estado'] = "1";
$respuesta['datos']= $datostotales;
$respuesta['mensaje'] = "Consulta Exitosa.";

header('Content-type: application/json; charset=utf-8');
$jsonfile = json_encode($respuesta);
print $jsonfile;
?>