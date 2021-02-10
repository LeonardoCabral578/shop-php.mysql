<?php

# ERRORES
#-------------------------------------------------------------------------------------------#
    function mostrarError($errores, $campo){

        $alerta = '';
        if (isset($errores[$campo]) && !empty($campo)) {
            $alerta = "<div class='alert_red'>" . $errores[$campo] . '</div>';
        }

        return $alerta;
    }

    function borrarErrores(){
        $borrado = false;

        if (isset($_SESSION['errores'])) {
            $_SESSION['errores'] = null;
            $borrado = true;
        }

        return $borrado;
    }