<?php
    require_once("../config/conexion.php");
    require_once("../models/Proceso.php");

    $proceso = new Proceso();

    switch($_GET["op"]){
        case "combo":
            $datos = $proceso->get_proceso();
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row)
                {
                    $html.= "<option value='".$row['proceso_id']."'>".$row['proces_name']."</option>";
                }
                echo $html;
            }
        break;
    }
?>