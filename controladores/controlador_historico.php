<?php

include_once("$_SERVER[DOCUMENT_ROOT]/sistema/modelos/historico.php");
include_once("$_SERVER[DOCUMENT_ROOT]/sistema/conexion.php");

DB::crearInstancia();

class ControladorHistorico{
    public function inicio(){
        $historicos = Historico::consultar();
        include_once("vistas/historico/inicio.php");
    }
    public function borrar(){
        $id = $_GET['id'];
        Historico::borrar($id);
        header("Location:./?controlador=historico&accion=inicio");
    }
    public function vaciar(){
        historico::vaciar();
        header("Location:./?controlador=historico&accion=inicio");
    }
}

?>