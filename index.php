<?php

$controlador = "paginas";
$accion = "inicio";

if( isset($_GET['controlador']) && isset($_GET['accion'])){

    if(($_GET['controlador']!="") && ($_GET['accion']!="")){
        $controlador = $_GET['controlador'];
        $accion = $_GET['accion'];
    }

    //print_r($_GET);
    //para probar http://localhost/sistema/?controlador=paginas&accion=inicio
}
require_once("vistas/template.php");

?>