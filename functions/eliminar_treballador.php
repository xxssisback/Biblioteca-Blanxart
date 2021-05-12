<?php
require('connector.php');
$sql="DELETE FROM tb_treballadors WHERE id_treballador=".$_GET["usuari"];
echo $sql;
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../llistat_treballadors.php");
?>