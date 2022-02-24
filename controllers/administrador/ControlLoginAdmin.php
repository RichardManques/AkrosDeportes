<?php

namespace controllers;

use models\UsuarioModel as UsuarioModel;

require_once("../../models/UsuarioModel.php");

class ControlLoginAdmin{
    private $rut;
    private $clave;
    
    public function __construct()
    {
        $this->rut = $_POST['rut'];
        $this->clave = $_POST['clave'];
    }

    public function iniciarSesionAdmin(){
        session_start();

        if($this->rut=="" || $this->clave==""){
            $_SESSION['msgError']= "Complete los campos para poder iniciar sesión";
            header("Location:../../views/cliente/login.php");
            return;
        }
        $modelo = new UsuarioModel();
        $arreglo = $modelo->iniciarSesionAdmin($this->rut,$this->clave);
        
        if(count($arreglo)==0){
            $_SESSION['msgError']="Los campos no coinciden, intente nuevamente";
            header("Location:../../views/cliente/login.php");
            return;
        }
        $_SESSION['admin'] = $arreglo[0];
        header("Location:../../views/administrador/gestionPedidos.php");
    }
}

$obj = new ControlLoginAdmin();
$obj->iniciarSesionAdmin();