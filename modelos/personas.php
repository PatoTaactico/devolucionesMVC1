
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
</body>
</html>

<?php

    //incluir la clase pára la conexion a la base de datos
    include_once("modelos/conexion.php");

    class persona{

        //atributos
        private $ID;
        private $Nombre_Rol;
        private $Ficha;
        private $Fecha;
        private $Placa;

        private $con;

        //metodos

        //conexion
        public function __construct(){
            $this->con=new conexion();
        }
        // set get <
        //set sirve para mandar datos a la bd
        public function set($atributo, $contenido){
            $this->$atributo=$contenido;
        }
        //get sirve para extraer datos de la bd
        public function get($atributo){
            return $this->$atributo;
        }
        //set get >
        //otras funciones
        public function crear(){
            $sql2="SELECT * FROM devoluciones WHERE Placa='{$this->Placa}'";
            $resultado=$this->con->consultaRetorno($sql2);
            $filas=mysqli_num_rows($resultado);

            if($filas==0){
                $sql="INSERT INTO devoluciones (Nombre_Rol, Ficha, Fecha, Placa) VALUES ('{$this->Nombre_Rol}', '{$this->Ficha}', '{$this->Fecha}', '{$this->Placa}')";
                $this->con->consultaSimple($sql);
                return true;
            }else{
                return false;
            }
        }

        public function ver(){
            $sql="SELECT * FROM devoluciones WHERE ID='{$this->ID}'";
            $resultado=$this->con->consultaRetorno($sql);
            $reg=mysqli_fetch_assoc($resultado);

            $this->Nombre_Rol=$reg["Nombre_Rol"];
            $this->Ficha=$reg["Ficha"];
            $this->Fecha=$reg["Fecha"];
            $this->Placa=$reg["Placa"];

            return $reg;
        }

        public function eliminar(){
            $sql = "DELETE FROM devoluciones WHERE ID = {$this -> ID}";
            $this -> con -> consultaSimple($sql);
        }

        public function editar(){
            $sql = "UPDATE devoluciones SET Nombre_Rol = '{$this -> Nombre_Rol}',
                Ficha = '{$this -> Ficha}',
                Fecha = '{$this -> Fecha}',
                Placa = '{$this -> Placa}' WHERE ID = {$this -> ID}";
            echo $sql;
            $this -> con -> consultaSimple($sql); 
        }

        public function listar(){
            $sql="SELECT * FROM devoluciones";
            $resultado=$this->con->consultaRetorno($sql);
            return $resultado;
        }
    }
?>