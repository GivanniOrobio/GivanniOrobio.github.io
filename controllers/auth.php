<?php 
class Auth{
    static public function login(){
        if (empty($_POST['loginPassword'])) {
            $respuesta =  '
            <div class="alert alert-danger text-center w-50 m-auto ">
                Porfavor ingrese su contraseña
            </div>
            ';
            $respuesta;
        } else {
            $datosIngreso = array("email" => $_POST['loginEmail'], "password" => md5($_POST['loginPassword']));
            $respuesta = Bd::IngresoModel($datosIngreso, 'users');
            if ($respuesta == false) {
                echo
                '
                <div class="alert alert-danger text-center w-50 m-auto ">
                    Los datos no conisiden con ningun usuario existente
                </div>
                ';
            } else {
                $_SESSION['validar'] = 1;
                $_SESSION['usuario'] = $respuesta;
                echo '<meta http-equiv="refresh" content="0;url=index.php?action=account/user">';
                
            }
        } 
    }
}
