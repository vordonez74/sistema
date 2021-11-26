<?php

include_once("$_SERVER[DOCUMENT_ROOT]/sistema/controladores/controlador_graficos.php");
include_once("$_SERVER[DOCUMENT_ROOT]/sistema/modelos/cliente.php");

class AjaxListado{
    public function listarTemp(){
        $respuesta = ControladorGraficos::crearListaTemp();
        echo json_encode($respuesta);
    }
}

$instancia = new AjaxListado();
$instancia->listarTemp();
?>