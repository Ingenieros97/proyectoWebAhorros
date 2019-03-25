<?php
include("../../clases/config.php");
include("../../clases/cls_conexion.php");
include("../../clases/cls_servicio.php");
header("content-type:application/json");
$obj_prod = new Servicio();
$obj_prod->nombre =$_POST['nombre'];
$obj_prod->costo =$_POST['costo'];
$obj_prod->descripcion = $_POST['descripcion'];
$obj_prod->fecha = $_POST['fecha'];
$arr =array();
//$arr["mensaje"]=$obj_prod->Guardar();

if ($obj_prod->Guardar())
{
$arr["mensaje"]="Se guardo correctamente";
$arr["resultado"]=true;
}
else {
$arr["mensaje"]="Verifica tus datos";
$arr["resultado"]=false;
}
echo json_encode($arr);
?>
