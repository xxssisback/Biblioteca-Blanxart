<?php 
include("connector.php");
$sql="INSERT INTO tb_pressupostos VALUES(null, '".$_REQUEST["data_elaboracio"]."',null,null,null,null,null,null,null, '".$_REQUEST["detall"]."',".$_REQUEST["id_client"].",".$_REQUEST["id_treballador"].");";
echo $sql;
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
$id_pressupost=mysqli_insert_id($dbLink);
?>
<?php
header("Location:../carregar_taula_pressupostos.php?estat=pendents_presentar");
?>