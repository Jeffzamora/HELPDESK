<?php
    class Proceso extends Conectar{

        public function get_proceso(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM proceso WHERE esta='1';";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

    }
?>