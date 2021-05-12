<?php
$estat=$_REQUEST["estat"];
include("connector.php");
if($estat=="pendents_presentar") {
    $sql="SELECT COUNT(*) AS total FROM tb_pressupostos WHERE ISNULL(data_presentacio);";
    $result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
    $reg=mysqli_fetch_array($result);
    echo $reg["total"];
}elseif($estat=="presentats") {
    $sql="SELECT COUNT(*) AS total FROM tb_pressupostos WHERE NOT ISNULL(data_presentacio) AND ISNULL(data_acceptacio) AND ISNULL(data_rebuig);";
    $result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
    $reg=mysqli_fetch_array($result);
    echo $reg["total"];

}if($estat=="vençuts") {
    $sql="SELECT COUNT(*) AS total FROM tb_pressupostos WHERE NOT ISNULL(data_venciment);";
    $result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
    $reg=mysqli_fetch_array($result);
    echo $reg["total"];
}elseif($estat=="aprovats") {
    $sql="SELECT COUNT(*) AS total FROM tb_pressupostos WHERE NOT ISNULL(data_acceptacio);";
    $result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
    $reg=mysqli_fetch_array($result);
    echo $reg["total"];
    
}if($estat=="rebutjats") {
    $sql="SELECT COUNT(*) AS total FROM tb_pressupostos WHERE NOT ISNULL(data_rebuig);";
    $result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
    $reg=mysqli_fetch_array($result);
    echo $reg["total"];
}
?>