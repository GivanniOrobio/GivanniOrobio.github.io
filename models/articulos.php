<?php 
include_once 'conexion.php';
class CartsModels extends Conexion{
    static public function cart(){
        $sql = 'SELECT * FROM carts';
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount() > 0){
             $carts =$stmt->fetch();
        }else{
            $carts = 'no existen productos registrados';
        }
        return $carts;
    }
}
