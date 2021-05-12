<?php 
require('connector.php');
$sql="UPDATE tb_clients SET nom_client='".$_POST["nom_client"]."',adreça='".$_POST["adreça"]."',correu_electronic='".$_POST["correu_electronic"]."',poblacio='".$_POST["poblacio"]."',telefon='".$_POST["telefon"]."',nif='".$_POST["nif"]."' WHERE id_client=".$_POST["id_client"].";";
echo $sql;
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../llistat_clients.php");
?>
