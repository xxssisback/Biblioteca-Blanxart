<?php 
require('connector.php');
$sql="INSERT INTO tb_treballadors VALUES (null,'".$_POST["nom_i_cognom"]."','".$_POST["data_naixament"]."','".$_POST["correu_electronic"]."','".$_POST["numero_contacte"]."','".$_POST["poblacio"]."','".$_POST["dni"]."','".$_POST["carrec"]."');";
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../llistat_treballadors.php");
?>