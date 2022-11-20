<?php
    class Usuario extends Conectar{
        public function login(){
            $conectar=parent::Conexion();
            parent::set_names();
            if(isset($_POST["Enviar"])){
                $correo = $_POST["usu_correo"];
                $pass = $_POST["usu_pass"];
                if(empty($correo)and empty($pass)){
                    header("Location:".conectar::ruta()."index.php?m=2");
                    exit();
                }else{
                    $sql = "SELECT * FROM usuario WHERE usu_correo=? and usu_pass=? and estado=1";
                    $stmt = $conectar->prepare($sql);
                    $stmt->bindValue(1, $correo);
                    $stmt->bindValue(2, $pass);
                    $stmt->execute();
                    $resultado = $stmt->fetch();
                    if(is_array($resultado) and count($resultado)>0){
                        $_SESSION["usu_id"]=$resultado["usu_id"];
                        $_SESSION["usu_name"]=$resultado["usu_name"];
                        $_SESSION["usu_apell"]=$resultado["usu_apell"];
                        header("Location:".Conectar::ruta()."view/home/");
                        exit();
                    }else{
                        header("Location:".Conectar::ruta()."index.php?m=1");
                        exit();
                    }
                }
            }
        }
    }
?>