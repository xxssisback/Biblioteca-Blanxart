<?php 
require('connector.php');
$sql="UPDATE tb_operacions SET nom_i_cognom='".$_POST["nom_i_cognom"]."',nom='".$_POST["nom"]."',genere='".$_POST["genere"]."',proveidor='".$_POST["proveidor"]."',quantitat='".$_POST["quantitat"]."',preu='".$_POST["preu"]."' WHERE id_operacio=".$_POST["id_operacio"].";";
echo $sql;
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../llistat_vendes.php");
?>