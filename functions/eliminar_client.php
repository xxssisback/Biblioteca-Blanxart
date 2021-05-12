<?php
require('connector.php');
$sql="DELETE FROM tb_clients WHERE id_client=".$_GET["usuari"];
echo $sql;
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../llistat_clients.php");
?>