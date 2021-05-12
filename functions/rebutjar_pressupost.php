<?php
include("connector.php");
// Aquest arxiu informa la data d'acceptació del pressupost
$id_pressupost=$_REQUEST["id_pressupost"];
$sql="UPDATE tb_pressupostos SET data_rebuig='".date("Y-m-d")."' WHERE id_pressupost=$id_pressupost";
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));

header("Location:../carregar_taula_pressupostos.php?estat=presentats")
?>