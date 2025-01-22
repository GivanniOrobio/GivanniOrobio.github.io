<?php

class EnlacesModels {

    static public function enlacesModel($enlaces) {
        // Definir la ruta base
        $basePath = "views/";

        // Verificar si el enlace es "index" o "ok" y redirigir a los archivos correspondientes
        if ($enlaces == "index") {
            $module = $basePath . "inicio.php";
        } else if($enlaces == 'app/'){
            $module="../carts";
        } else {
            // Construir la ruta del archivo
            $ruta=$module = $basePath . $enlaces . ".php";
            $module = $basePath . $enlaces . ".php";

            // Verificar si el archivo existe
            if (!file_exists($module)) {
                // Si el archivo no existe, redirigir a login.php
                $module = $basePath . "inicio.php";
                echo "El archivo $enlaces no existe";
            }
        }
        if (isset($ruta))echo'url='.($ruta) ;
        return $module;
    }
}