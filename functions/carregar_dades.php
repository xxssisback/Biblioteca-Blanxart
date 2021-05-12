<?php 

$fitxer=fopen("../sql/biblioteca_blanxart.sql","r");
require('connector.php');
$sql="";
while($linia=fgets($fitxer)) {
    $sql.=$linia;
    if(strpos($sql,";")>0){
        echo $sql."<br>";
        $result=mysqli_query($dbLink,$sql);
        $error=mysqli_errno($dbLink);
        if($error!=0 && $error!=1065) {
            echo "$error - ".mysqli_error($dbLink),"<br>";
            header("Location:../error.php");
        }else {
            header("Location:../index.php");
        }
        $sql="";
    }
}
fclose($fitxer);
?>