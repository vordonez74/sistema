<?php

//CREATE VIEW temp as SELECT id, variable, clientes_id, valor, fecha FROM historico WHERE VARIABLE= "temperatur";
class Grafico{
    public $id;
    public $variable;
    public $clientes_id;
    public $valor;
    public $fecha;

    public function __construct($id,$variable,$clientes_id,$valor,$fecha){
        $this->id=$id;
        $this->variable= $variable;
        $this->clientes_id= $clientes_id;
        $this->valor= $valor;
        $this->fecha= $fecha;        
    }

    public static function consultar(){
        $ListaTemp=[];
        $conexionDB=DB::crearInstancia();
        $sql=$conexionDB->query("SELECT * FROM temp");
        foreach($sql->fetchAll() as $temp){
            $ListaTemp[]= new Grafico($temp['id'],$temp['variable'],$temp['clientes_id'],$temp['valor'],$temp['fecha']);
        }
        return $ListaTemp;
    }

    public static function listarTemp(){
        $conexionDB=DB::crearInstancia();
        $proc=$conexionDB->prepare("CALL procesoTemp");
        $proc->execute();
        return $proc->fetchAll();
        $proc = null;
    }
}
?>


