<?php 
require('connector.php');
$sql="UPDATE tb_producte SET nom='".$_POST["nom"]."',genere='".$_POST["genere"]."',proveidor='".$_POST["proveidor"]."' WHERE id_producte=".$_POST["id_producte"].";";
echo $sql;
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../llistat_productes.php");
?>
