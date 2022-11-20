<?php
    class Tipo extends Conectar{

        public function get_tipo(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tipo WHERE esta='1';";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

    }
?>