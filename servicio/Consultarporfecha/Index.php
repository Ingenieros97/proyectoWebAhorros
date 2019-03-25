<?php
include("../../clases/config.php");
include("../../clases/cls_conexion.php");
include("../../clases/cls_servicio.php");
header("content-type:application/json");
$obj_prod = new Servicio();
$obj_prod->fecha= $_POST["fecha"];
$array = $obj_prod->consultar();

echo json_encode($array);
 ?>
