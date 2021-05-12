<?php 
require('connector.php');
$sql="INSERT INTO tb_operacions VALUES (null,'".$_POST["nom_i_cognom"]."','".$_POST["nom"]."','".$_POST["genere"]."','".$_POST["proveidor"]."','".$_POST["quantitat"]."','".$_POST["preu"]."');";
echo $sql;
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../llistat_vendes.php");
?>
