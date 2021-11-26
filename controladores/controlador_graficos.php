<?php

include_once("$_SERVER[DOCUMENT_ROOT]/sistema/modelos/grafico.php");
include_once("$_SERVER[DOCUMENT_ROOT]/sistema/conexion.php");

DB::crearInstancia();

class ControladorGraficos{
    public function inicio(){
        $temperaturas = Grafico::consultar();
        include_once("vistas/graficos/inicio.php");
    }

    public static function crearListaTemp(){
        $respuesta = Grafico::listarTemp();
        return $respuesta;
    }

    public static function chartjs(){
        include_once("vistas/graficos/chartjs.php");
    }
}

?>