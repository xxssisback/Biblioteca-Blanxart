<?php 
require('connector.php');
$sql="INSERT INTO tb_clients VALUES (null,'".$_POST["nom_client"]."','".$_POST["adreça"]."','".$_POST["correu_electronic"]."','".$_POST["telefon"]."','".$_POST["poblacio"]."','".$_POST["nif"]."');";
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../llistat_clients.php");
?>