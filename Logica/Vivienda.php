<?php 
 require_once "Persistencia/Conexion.php";
 require_once "Persistencia/ViviendaDAO.php";
 
class Vivienda{

    private $idVivienda;
    private $direccion;
    private $telefono;
    private $barrio;
    private $conexion;
    private $viviendaDAO;


    public function getidVivienda(){
        return $this -> idVivienda;
    }
    public function getDireccion(){
        return $this -> direccion;
    } 
    public function getTelefono(){
        return $this -> telefono;
    }
    public function getBarrio(){
        return $this -> barrio;
    }

    public function Vivienda($idVivienda = "", $direccion = "", $telefono = "", $barrio = ""){
        $this -> idVivienda = $idVivienda;
        $this -> direccion = $direccion;
        $this -> telefono = $telefono;
        $this -> barrio = $barrio;
        $this -> conexion = new Conexion(); 
        $this -> viviendaDAO = new ViviendaDAO($this -> idVivienda, $this -> direccion, $this -> telefono, $this -> barrio);
    }

    public function insertar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> viviendaDAO -> insertar());
        $this -> conexion -> cerrar();
    }

    public function consultarPaginacion($Cantidad, $Pagina){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> viviendaDAO -> consultarPaginacion($Cantidad,$Pagina));
        $arrayviviendas = array();
        while(($resultado = $this -> conexion -> extraer()) != null){
            $newVivienda = new Vivienda($resultado[0],$resultado[1],$resultado[2],$resultado[3]);
            array_push($arrayviviendas,$newVivienda);
        }
        $this -> conexion -> cerrar();
        return $arrayviviendas;
    }

    public function cantidadPaginas(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> viviendaDAO -> cantidadPaginas());
        return $this -> conexion -> extraer();
    }

   
}
