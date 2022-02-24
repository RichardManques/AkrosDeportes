<?php

namespace models;

require_once("Conexion.php");

class UsuarioModel{
    //metodos y funcionalidades para UsuarioModel
    public function usuarioNuevo($data){
        $stm = Conexion::conector()->prepare("INSERT INTO USUARIO VALUES (:A,:B,'cliente',md5(123456))");
        $stm->bindParam(":A",$data['rut']);
        $stm->bindParam(":B",$data['nombre']);
        return $stm->execute();
    }

    public function iniciarSesionAdmin($rut,$clave){
        $stm = Conexion::conector()->prepare("SELECT * FROM USUARIO WHERE rutUsuario=:A AND clave=:B AND rol='administrador'");
        $stm->bindParam(":A",$rut);
        $stm->bindParam(":B",$clave);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    

}