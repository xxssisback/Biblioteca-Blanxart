<pre>
    <?php
    include("connector.php");
    //print_r($_REQUEST);
    if($_REQUEST["id_pressupost_linia"]=="") {
        // Estem en una inserció
        $sql="INSERT INTO tb_pressupostos_linies VALUES (null,'".$_REQUEST["descripcio"]."',".$_REQUEST["quantitat"].",".$_REQUEST["preu_unitat"].",".($_REQUEST["quantitat"]*$_REQUEST["preu_unitat"]).",".$_REQUEST["id_pressupost"].");";    
    }else{
        // Estem en una modificació
        $sql="UPDATE tb_pressupostos_linies SET descripcio='".$_REQUEST["descripcio"]."',quantitat=".$_REQUEST["quantitat"].",preu_unitat=".$_REQUEST["preu_unitat"].",total=".($_REQUEST["quantitat"]*$_REQUEST["preu_unitat"])." WHERE id_pressupost_linia=".$_REQUEST["id_pressupost_linia"];
    }
    //echo $sql;
    $result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));

    // Segona part. Muntem una taula amb la informació de la taula de línies de pressupost.
    $sql="SELECT * FROM tb_pressupostos_linies WHERE id_pressupost=".$_REQUEST["id_pressupost"];
    $result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));?>
                    <table>
                        <tr><th>Descripció</th><th>Quantitat</th><th>Preu</th><th>Total</th></tr><?php

                    while($linia=mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $linia["descripcio"]; ?></td>
                            <td><?php echo $linia["quantitat"]; ?></td>
                            <td><?php echo $linia["preu_unitat"]; ?></td>
                            <td><?php echo $linia["total"]; ?></td>
                            <td>
                                <input class="button-white button-block-editar as-tradeupinline-button" type="button" id="boton_editar" name="boton_editar" value="Editar" onclick="editar_linia(<?php echo $linia['id_pressupost_linia'];?>,'<?php echo $linia['descripcio'];?>',<?php echo $linia['quantitat'];?>,<?php echo $linia['preu_unitat'];?>)">
                                <a class="button-white button-block-eliminar as-tradeupinline-button" href="eliminar_pressupost.php?usuari=<?php echo $linia["id_pressupost_linia"];?>">Eliminar</a>
                            </td>
                        </tr> <?php
                    } ?>
    </table>

</pre>