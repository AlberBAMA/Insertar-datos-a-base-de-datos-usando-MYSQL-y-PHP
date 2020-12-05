<?php 
include "conexion.php";


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$numero = $_POST["numero"];
$tipo = $_POST["tipo"];
$empresa = $_POST["empresa"];
$codigo = $_POST["codigo"];


$mquery1 = "INSERT INTO contacto VALUES('".$nombre."','".$apellido."','".$empresa."')";
$mquery2 = "INSERT INTO telefono VALUES('".$codigo."','".$numero."','".$tipo."')";



$query1 = mysqli_query($con,$mquery1);
$query2 = mysqli_query($con,$mquery2);

if ($query1 == 1 && $query2 == 1) {
	echo "Datos Insertados.";

}else 
echo "Error datos no insertados.";

echo mysqli_error($con);


 ?>