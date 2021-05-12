<?php
require('connector.php');
$sql="DELETE FROM tb_pressupostos_linies WHERE id_pressupost_linia=".$_GET["usuari"];
echo $sql;
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../carregar_taula_pressupostos.php?estat=pendents_presentar");
?>