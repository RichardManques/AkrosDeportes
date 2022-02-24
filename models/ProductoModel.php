<?php

namespace models;

require_once("Conexion.php");

class ProductoModel{

    public function __construct()
    {
        //variables desde la vista agregar producto
    }
    
    public function obtenerProductos(){
        $stm = Conexion::conector()->prepare("SELECT * FROM producto");
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }
}