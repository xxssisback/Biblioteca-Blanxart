<?php
require('connector.php');
$sql="DELETE FROM tb_producte WHERE id_producte=".$_GET["usuari"];
echo $sql;
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../llistat_productes.php");
?>