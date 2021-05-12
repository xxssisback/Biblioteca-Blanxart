<?php 
require('connector.php');
$sql="INSERT INTO tb_producte VALUES (null,'".$_POST["nom"]."','".$_POST["genere"]."','".$_POST["proveidor"]."');";
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../llistat_productes.php");
?>