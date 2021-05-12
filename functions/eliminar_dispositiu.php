<?php
require('connector.php');
$sql="DELETE FROM tb_ordinadors WHERE id_ordinador=".$_GET["usuari"];
echo $sql;
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../llistat_dispositius.php");
?>