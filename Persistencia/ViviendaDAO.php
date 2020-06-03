<?php

    class ViviendaDAO{
        private $idVivienda;
        private $direccion;
        private $telefono;
        private $barrio;

        public function getidVivienda(){
            return $this -> idVivienda;
        }

        public function Vivienda($idVivienda = "", $direccion = "", $telefono = "", $barrio = ""){
            $this -> idVivienda = $idVivienda;
            $this -> direccion = $direccion;
            $this -> telefono = $telefono;
            $this -> barrio = $barrio;
        }

        public function insertar(){
            return "insert into vivienda values('','".$this -> direccion."','".$this -> telefono."','".$this -> barrio."')";
        }
        
        public function consultarPaginacion($cantidad, $pagina){
            return "select idVivienda, direccion, telefono, barrio
                    from vivienda
                    limit " . (($pagina-1) * $cantidad) . ", " . $cantidad;
        }
    
        public function cantidadPaginas(){
            return "select count(idVivienda) from vivienda";
        }

    }
?>