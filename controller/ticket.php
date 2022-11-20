<?php
    require_once("../config/conexion.php");
    require_once("../models/Ticket.php");

    $ticket = new Ticket();

    switch($_GET["op"]){
        case "insert":
            $ticket->insert_ticket($_POST["usu_id"],$_POST["tipo_id"],$_POST["proceso_id"],$_POST["tick_orden"],$_POST["tick_acta"],$_POST["tick_descrip"]);
        break;
    }
?>