<?php 
$dbLink=mysqli_connect("localhost","usuari","123456","aso_cafe") or exit(mysqli_connect_error());
$sql="UPDATE tb_treballadors SET nom_i_cognom='".$_POST["nom_i_cognom"]."',data_naixament='".$_POST["data_naixament"]."',correu_electronic='".$_POST["correu_electronic"]."',numero_contacte='".$_POST["numero_contacte"]."',poblacio='".$_POST["poblacio"]."',dni='".$_POST["dni"]."',carrec='".$_POST["carrec"]."' WHERE id_treballador=".$_POST["id_treballador"].";";
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
header("Location:llistat_treballadors.php");
?>
