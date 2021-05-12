<pre>
<?php print_r($_POST); ?>
</pre>
<?php
$usuari=$_POST["usuari"];
$contrasenya=$_POST["contrasenya"];
require_once('connector.php');
$sql="SELECT * FROM tb_admins WHERE usuari='$usuari' AND contrasenya='$contrasenya';";
$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
if(mysqli_num_rows($result)==1){
    session_start();
    $_SESSION["usuari"]=$usuari;
    $_SESSION["login"]=true;
    header("location:../index.php");
}else{ 
    header("location:../invalid.php");
}
?>