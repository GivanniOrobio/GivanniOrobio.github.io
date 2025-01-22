<?php 
require_once "conexion.php";
class Bd extends Conexion{
    static public function IngresoModel($datos, $tabla){
        var_dump($datos);
        $SQL="SELECT * FROM $tabla WHERE email = :email AND password = :password";
        $stmt = Conexion::conectar()->prepare($SQL);
        $stmt->bindParam(":email", $datos['email'], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos['password'], PDO::PARAM_STR);
        if($stmt->execute())
        {
            $respuesta = $stmt->fetchAll();

            return $respuesta;

        }else{
            $respuesta = false;
        }
          
    }
}

?>