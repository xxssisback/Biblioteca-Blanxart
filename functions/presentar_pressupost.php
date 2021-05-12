<?php
include("connector.php");
$id_pressupost=$_REQUEST["id_pressupost"];
$sql="UPDATE tb_pressupostos SET data_presentacio='".date("Y-m-d")."' WHERE id_pressupost=$id_pressupost";
echo $sql;
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:../carregar_taula_pressupostos.php?estat=pendents_presentar");
?>
