<?php
require('connector.php');
$sql="DELETE FROM tb_operacions WHERE id_operacio=".$_GET["usuari"];
echo $sql;
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../llistat_vendes.php");
?>