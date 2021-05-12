<?php 
require('connector.php');
$sql="UPDATE tb_ordinadors SET cpu='".$_POST["cpu"]."',ram='".$_POST["ram"]."',placa_base='".$_POST["placa_base"]."',disc_dur='".$_POST["disc_dur"]."',tipus='".$_POST["tipus"]."',id_software='".$_POST["id_software"]."' WHERE id_ordinador=".$_POST["id_ordinador"].";";
echo $sql;
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../llistat_dispositius.php");
?>
