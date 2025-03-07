<?php
include_once("modelos/personas.php");

class controladorPersona{
    //atributo
    private $persona;

    //metodos
    public function __construct(){
        $this->persona=new persona();
    }

    public function index(){
        $resultado=$this->persona->listar();
        return $resultado;
    }

    public function ver($ID){
        $this->persona->set("ID", $ID);
        return $this->persona->ver();
    }

    public function crear($Nombre_Rol, $Ficha, $Fecha, $Placa){
        $this->persona->set("Nombre_Rol", $Nombre_Rol);
        $this->persona->set("Ficha", $Ficha);
        $this->persona->set("Fecha", $Fecha);
        $this->persona->set("Placa", $Placa);

        $resultado=$this->persona->crear();
        return $resultado;
    }

    public function eliminar($ID){
        $this -> persona -> set("ID", $ID);
        return $this -> persona -> eliminar();
    }

    public function editar($Nombre_Rol, $Ficha, $Fecha, $Placa){
        $this->persona->set("Nombre_Rol", $Nombre_Rol);
        $this->persona->set("Ficha", $Ficha);
        $this->persona->set("Fecha", $Fecha);
        $this->persona->set("Placa", $Placa);

        $this -> persona -> editar();
    }
}