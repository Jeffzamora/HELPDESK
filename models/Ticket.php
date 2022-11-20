<?php
    class Ticket extends Conectar{

        public function insert_ticket($usu_id,$tipo_id,$proceso_id,$tick_orden,$tick_acta,$tick_descrip){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO ticket(tick_id,usu_id,tipo_id,proceso_id,tick_orden,tick_acta,tick_fecha,tick_descrip,esta) VALUES (NULL,?,?,?,?,?,now(),?,'1')";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_id);
            $sql->bindValue(2, $tipo_id);
            $sql->bindValue(3, $proceso_id);
            $sql->bindValue(4, $tick_orden);
            $sql->bindValue(5, $tick_acta);
            $sql->bindValue(6, $tick_descrip);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

    }
?>