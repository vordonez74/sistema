<?php

class Cliente{
    public $id;
    public $dispositivo;
    public $temperatura;
    public $pulso;
    public $oxigeno;
    public $codigo;

    public function __construct($id,$dispositivo,$temperatura,$pulso,$oxigeno,$codigo){
        $this->id=$id;
        $this->dispositivo=$dispositivo;
        $this->temperatura=$temperatura;
        $this->pulso=$pulso;
        $this->oxigeno=$oxigeno;
        $this->codigo=$codigo;
    }

    public static function consultar(){
        $ListaClientes=[];
        $conexionDB=DB::crearInstancia();
        $sql = $conexionDB->query("SELECT * FROM clientes");
        
        foreach($sql->fetchAll() as $cliente){
            $ListaClientes[]= new Cliente($cliente['id'],$cliente['dispositivo'],$cliente['temperatura'],$cliente['pulso'],$cliente['oxigeno'],$cliente['codigo']);
        }
        return $ListaClientes;
    }

    public static function crear($dispositivo,$temperatura,$pulso,$oxigeno,$codigo){
        $conexionDB=DB::crearInstancia();
        $sql=$conexionDB->prepare("INSERT INTO clientes(dispositivo, temperatura, pulso, oxigeno, codigo) VALUES (?,?,?,?,?)");
        $sql->execute(array($dispositivo,$temperatura,$pulso,$oxigeno,$codigo));
    }

    public static function borrar($id){
        $conexionDB=DB::crearInstancia();
        $sql=$conexionDB->prepare("DELETE FROM clientes WHERE id= ?");
        $sql->execute(array($id));
    }
    public static function buscar($id){
        $conexionDB=DB::crearInstancia();
        $sql=$conexionDB->prepare("SELECT * FROM clientes WHERE id= ?");
        $sql->execute(array($id));
        $cliente = $sql->fetch();
        return new Cliente($cliente['id'],$cliente['dispositivo'],$cliente['temperatura'],$cliente['pulso'],$cliente['oxigeno'],$cliente['codigo']);
    }
    public static function editar($id,$dispositivo,$temperatura,$pulso,$oxigeno,$codigo){
        $conexionDB=DB::crearInstancia();
        $sql=$conexionDB->prepare("UPDATE clientes SET dispositivo=?, temperatura=?, pulso=?, oxigeno=?, codigo=? WHERE id=?");
        $sql->execute(array($dispositivo,$temperatura,$pulso,$oxigeno,$codigo,$id));        
    }
}

?>