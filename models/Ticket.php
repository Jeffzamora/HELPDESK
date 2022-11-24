<?php
    class Ticket extends Conectar{

        public function insert_ticket($usu_id,$tipo_id,$proceso_id,$tick_orden,$tick_acta,$tick_descrip){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO ticket(tick_id,usu_id,tipo_id,proceso_id,tick_orden,tick_acta,tick_fecha,tick_descrip,tick_estado,esta) VALUES (NULL,?,?,?,?,?,now(),?,'Abierto','1')";
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

        public function list_ticket($usu_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT
            ticket.tick_id,
            ticket.usu_id,
            ticket.tipo_id,
            ticket.proceso_id,
            ticket.tick_orden,
            ticket.tick_acta,
            ticket.tick_descrip,
            ticket.tick_estado,
            ticket.tick_fecha,
            usuario.usu_name,
            usuario.usu_apell,
            tipo.tipo_name,
            proceso.proces_name
            FROM
            ticket
            INNER join proceso on ticket.proceso_id = proceso.proceso_id
            INNER join tipo on ticket.tipo_id = tipo.tipo_id
            INNER join usuario on ticket.usu_id = usuario.usu_id
            WHERE
            ticket.esta = 1
            AND usuario.usu_id=?;";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function listar_ticket_x_id($tick_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT
            ticket.tick_id,
            ticket.usu_id,
            ticket.tipo_id,
            ticket.proceso_id,
            ticket.tick_orden,
            ticket.tick_acta,
            ticket.tick_descrip,
            ticket.tick_estado,
            ticket.tick_fecha,
            usuario.usu_name,
            usuario.usu_apell,
            tipo.tipo_name,
            proceso.proces_name
            FROM
            ticket
            INNER join proceso on ticket.proceso_id = proceso.proceso_id
            INNER join tipo on ticket.tipo_id = tipo.tipo_id
            INNER join usuario on ticket.usu_id = usuario.usu_id
            WHERE
            ticket.esta = 1
            AND ticket.tick_id=?;";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $tick_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function listar_ticket(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT
            ticket.tick_id,
            ticket.usu_id,
            ticket.tipo_id,
            ticket.proceso_id,
            ticket.tick_orden,
            ticket.tick_acta,
            ticket.tick_descrip,
            ticket.tick_estado,
            ticket.tick_fecha,
            usuario.usu_name,
            usuario.usu_apell,
            tipo.tipo_name,
            proceso.proces_name
            FROM
            ticket
            INNER join proceso on ticket.proceso_id = proceso.proceso_id
            INNER join tipo on ticket.tipo_id = tipo.tipo_id
            INNER join usuario on ticket.usu_id = usuario.usu_id
            WHERE
            ticket.esta = 1;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

    }
?>