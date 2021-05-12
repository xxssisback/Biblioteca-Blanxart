<?php
$informe=$_REQUEST["informe"];

$data_inici=$_REQUEST["data_inici"];
$data_fi=$_REQUEST["data_fi"];
$id_client=$_REQUEST["id_client"];
$id_treballador=$_REQUEST["id_treballador"];
$id_clientt=$_REQUEST["id_client"];
$filtre="";
    if($data_inici!="") {
        $filtre.="data_presentacio>='$data_inici'";
    }
    if($data_fi!="") {
        if($filtre!="") $filtre.=" AND ";
        $filtre.="data_presentacio>='$data_fi'";
    }
    if($id_client>0) {
        if($filtre!="") $filtre.=" AND ";
        $filtre.="tb_pressupostos.id_client=$id_client";
    }
    if ($id_treballador>0) {
        if($filtre!="") $filtre.=" AND ";
        $filtre.="tb_pressupostos.id_treballador=$id_treballador";
    }
    if($filtre=="") $filtre=" 1 ";
    if($informe=="informe1"){
        
            include("connector.php");
            if($id_treballador == 0){
                $sql="SELECT * FROM tb_treballadors_2;";

            }else{
                $sql="SELECT * FROM tb_treballadors_2 WHERE id_treballador=".$id_treballador.";";
            }
            $treballadors=mysqli_query($dbLink,$sql) or exit (mysqli_error($dbLink));

            while($treballador=mysqli_fetch_array($treballadors)) {
                ?><h3>Presupostos de <?php echo $treballador["nom"]." ".$treballador["cognom"]?></h3>
                <table>
                <tr>
                    <th >Id</th>
                    <th >Pressupost</th>
                    <th >Data elaboració</th>
                    <th >Estat</th>
                </tr>
                <?php

                $sql="SELECT * FROM tb_pressupostos WHERE id_treballador=".$treballador["id_treballador"] ." AND ". $filtre;
                $pressupostos=mysqli_query($dbLink,$sql) or exit (mysqli_error($dbLink));
                while($pressupost=mysqli_fetch_array($pressupostos)) { 

                    ?><tr>
                    <td><?php echo $pressupost["id_pressupost"]; ?></td>
                    <td><?php echo $pressupost["detall"]; ?></td>
                    <td><?php echo $pressupost["data_elaboracio"]; ?></td>
                    <td><?php 
                        if($pressupost["data_venciment"] < date("Y-m-d") ){
                            if($pressupost["data_venciment"]==""){
                                echo $pressupost["estat"];
                            }else{
                                echo "Vençut";
                            }
                        }else{
                            echo $pressupost["estat"];
                        }           
                    ?> </td><?php         
                } 
            ?>
            </td>
                    </tr>  <?php


                    ?></table> <?php
            }
        }

    if($informe=="informe2"){
        include("connector.php");
        if($id_client == 0){
            $sql="SELECT * FROM tb_clients ORDER BY nom_client ";
        }else{
            $sql="SELECT * FROM tb_clients WHERE id_client=".$id_clientt.";";
        }
            $treballadors=mysqli_query($dbLink,$sql) or exit (mysqli_error($dbLink));

            while($treballador=mysqli_fetch_array($treballadors)) {
                ?><h3>Presupostos de <?php echo $treballador["nom_client"]?></h3>
                <table>
                <tr>
                    <th >Id</th>
                    <th >Pressupost</th>
                    <th >Data elaboració</th>
                    <th >Estat</th>
                </tr>
                <?php

                $sql="SELECT * FROM tb_pressupostos WHERE id_client=".$treballador["id_client"] ." AND ". $filtre ;
                $pressupostos=mysqli_query($dbLink,$sql) or exit (mysqli_error($dbLink));
                while($pressupost=mysqli_fetch_array($pressupostos)) { 

                    ?><tr>
                    <td><?php echo $pressupost["id_pressupost"]; ?></td>
                    <td><?php echo $pressupost["detall"]; ?></td>
                    <td><?php echo $pressupost["data_elaboracio"]; ?></td>
                    <td><?php 
                        if($pressupost["data_venciment"] < date("Y-m-d") ){
                            if($pressupost["data_venciment"]==""){
                                echo $pressupost["estat"];
                            }else{
                                echo "Vençut";
                            }
                        }else{
                            echo $pressupost["estat"];
                        }           
                    ?> </td><?php         
                } 
            ?>
            </td>
                    </tr>  <?php


                    ?></table> <?php
            }
        }
    if($informe=="informe3"){
        $sql="SELECT nom, cognom, sum(if(isnull(data_acceptacio),0,1)) as acceptat,sum(if(isnull(data_rebuig),0,1)) as rebuig, count(*) as total FROM tb_pressupostos INNER JOIN tb_treballadors_2 ON tb_pressupostos.id_treballador=tb_treballadors_2.id_treballador WHERE $filtre GROUP BY tb_treballadors_2.id_treballador;";

        include("connector.php");
        $result=mysqli_query($dbLink,$sql) or exit (mysqli_error($dbLink));
        
        ?>
        <h3>Percentatge aprovats i rebutjats per treballador</h3>
        <table>
            <tr>
                <th >Treballador</th>
                <th >Acceptats</th>
                <th >% Acceptats</th>

                <th >Rebutjats</th>
                <th >% Rebutjats</th>

                <th >Total</th>

            </tr>
            <?php
            while($reg=mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $reg["cognom"].", ".$reg["nom"]; ?></td>
                <td><?php echo $reg["acceptat"]; ?></td>
                <td><?php echo round($reg["acceptat"]/$reg["total"]*100,2); ?> %</td>
                <td><?php echo $reg["rebuig"]; ?></td>
                <td><?php echo round($reg["rebuig"]/$reg["total"]*100,2); ?> %</td>
                <td><?php echo $reg["total"]; ?></td>
            </tr>   <?php
        } ?>
        </table>
        <?php
    }
    if($informe=="informe4"){
        $sql="SELECT nom_client, sum(if(isnull(data_acceptacio),0,1)) as acceptat,sum(if(isnull(data_rebuig),0,1)) as rebuig, count(*) as total FROM tb_pressupostos INNER JOIN tb_clients ON tb_pressupostos.id_client=tb_clients.id_client WHERE $filtre GROUP BY tb_clients.id_client;";

        include("connector.php");
        $result=mysqli_query($dbLink,$sql) or exit (mysqli_error($dbLink));
        
        ?>
        <h3>Percentatge aprovats i rebutjats per client</h3>
        <table>
            <tr>
            <th >Client</th>
                <th >Acceptats</th>
                <th >% Acceptats</th>

                <th >Rebutjats</th>
                <th >% Rebutjats</th>

                <th >Total</th>

            </tr>
            <?php
            while($reg=mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $reg["nom_client"]; ?></td>
                <td><?php echo $reg["acceptat"]; ?></td>
                <td><?php echo round($reg["acceptat"]/$reg["total"]*100,2); ?></td>
                <td><?php echo $reg["rebuig"]; ?></td>
                <td><?php echo round($reg["rebuig"]/$reg["total"]*100,2); ?></td>
                <td><?php echo $reg["total"]; ?></td>
            </tr>   <?php
        } ?>
        </table>
        <?php
    }
    if($informe=="informe5"){
        if($id_treballador == 0){
            $sql="SELECT * FROM tb_pressupostos INNER JOIN tb_treballadors_2 ON tb_pressupostos.id_treballador=tb_treballadors_2.id_treballador ";

        }else{
            $sql="SELECT * FROM tb_pressupostos INNER JOIN tb_treballadors_2 ON tb_pressupostos.id_treballador=tb_treballadors_2.id_treballador WHERE tb_treballadors_2.id_treballador=".$id_treballador.";";
        }

        include("connector.php");
        $result=mysqli_query($dbLink,$sql) or exit (mysqli_error($dbLink));
        
        ?>
        <h3>Marge net per treballador</h3>
        <table>
            <tr>
                <th>Id Pressupost</th>
                <th >Treballador</th>
                <th >Marge Net Total per pressupost</th>
 

            </tr>
            <?php
            while($reg=mysqli_fetch_array($result)) { ?>
            <tr>
            <td><?php echo $reg["id_pressupost"]; ?></td>  

                <td><?php echo $reg["cognom"].", ".$reg["nom"]; ?></td>
                <td><?php echo $reg["descompte"]; ?>€</td>
            </tr>   <?php
        } ?>
        </table>
        <?php
    }
    if($informe=="informe6"){
        if($id_client == 0){
            $sql="SELECT * FROM tb_pressupostos INNER JOIN tb_clients ON tb_pressupostos.id_client=tb_clients.id_client ";

        }else{
            $sql="SELECT * FROM tb_pressupostos INNER JOIN tb_clients ON tb_pressupostos.id_client=tb_clients.id_client WHERE tb_clients.id_client=".$id_clientt.";";
        }

        include("connector.php");
        $result=mysqli_query($dbLink,$sql) or exit (mysqli_error($dbLink));
        
        ?>
        <h3>Marge Net per Client</h3>
        <table>
            <tr>
                <th>Id Pressupost</th>
                <th >Client</th>
                <th >Marge Net total per pressupost</th>
 

            </tr>
            <?php
            while($reg=mysqli_fetch_array($result)) { ?>
            <tr>
            <td><?php echo $reg["id_pressupost"]; ?></td>  
                <td><?php echo $reg["nom_client"]; ?></td>
                <td><?php echo $reg["descompte"]; ?>€</td>
            </tr>   <?php
        } ?>
        </table>
        <?php
    }
    ?>
 