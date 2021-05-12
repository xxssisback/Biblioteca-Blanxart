<?php 
require('connector.php');
$sql="INSERT INTO tb_ordinadors VALUES (null,'".$_POST["cpu"]."','".$_POST["ram"]."','".$_POST["placa_base"]."','".$_POST["disc_dur"]."','".$_POST["tipus"]."','".$_POST["sistema_operatiu"]."');";
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../llistat_dispositius.php");
?>

