<?php


include_once("$_SERVER[DOCUMENT_ROOT]/sistema/modelos/cliente.php");
include_once("$_SERVER[DOCUMENT_ROOT]/sistema/conexion.php");

DB::crearInstancia();

class ControladorClientes{
    public function inicio(){

        $clientes = Cliente::consultar();
        //print_r($clientes);
        include_once("vistas/clientes/inicio.php");
    }
    public function crear(){
        
        if($_POST){
            //print_r($_POST);
            $dispositivo = $_POST['dispositivo'];
            $temperatura = $_POST['temperatura']; 
            $pulso = $_POST['pulso']; 
            $oxigeno = $_POST['oxigeno']; 
            $codigo = $_POST['codigo'];
            Cliente::crear($dispositivo,$temperatura,$pulso,$oxigeno,$codigo);
            header("Location:./?controlador=clientes&accion=inicio");
        }
        
        include_once("vistas/clientes/crear.php");
    }
    public function editar(){
        if($_POST){
            $id = $_POST['id'];
            $dispositivo = $_POST['dispositivo'];
            $temperatura = $_POST['temperatura']; 
            $pulso = $_POST['pulso']; 
            $oxigeno = $_POST['oxigeno']; 
            $codigo = $_POST['codigo'];
            Cliente::editar($id,$dispositivo,$temperatura,$pulso,$oxigeno,$codigo);
            header("Location:./?controlador=clientes&accion=inicio");            
        }
        $id = $_GET['id'];
        $cliente = Cliente::buscar($id);        
        include_once("vistas/clientes/editar.php");
    }

    public function borrar(){
        $id = $_GET['id'];
        Cliente::borrar($id);
        header("Location:./?controlador=clientes&accion=inicio");
    }
}


?>