<?php

class historico{
    public $id;
    public $clientes_id;
    public $variable;
    public $valor;
    public $fecha;

    public function __construct($id,$clientes_id,$variable,$valor,$fecha){
        $this->id=$id;
        $this->clientes_id=$clientes_id;
        $this->variable=$variable;
        $this->valor=$valor;
        $this->fecha=$fecha;
    }
    public static function consultar(){
        $ListaHistorico=[];
        $conexionDB=DB::crearInstancia();
        $sql=$conexionDB->query("SELECT * FROM historico");

        foreach($sql->fetchAll() as $historico){
            $ListaHistorico[]= new historico($historico['id'],$historico['clientes_id'],$historico['variable'],$historico['valor'],$historico['fecha']);
        }
        return $ListaHistorico;
    }
    public static function borrar($id){
        $conexionDB=DB::crearInstancia();
        $sql=$conexionDB->prepare("DELETE FROM historico WHERE id=?");
        $sql->execute(array($id));
    }
    public static function vaciar(){
        $conexionDB=DB::crearInstancia();
        $sql=$conexionDB->prepare("TRUNCATE TABLE historico");
        $sql->execute();
    }
}
?>