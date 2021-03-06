<?php

namespace Domain;

class RolDomain
{

    private $Rol;

    function __construct()
    {
        $this->Rol = new $GLOBALS['Config']::$Rol;
    }

    function IsSuccess(){
        return $this->Rol->IsSuccess();
    }

    function GetMessage(){
        return $this->Rol->GetMessage();
    }

    function GetRoles(int $numberPage = 1)
    {
        return $this->Rol->GetRoles($numberPage);
    }

    function SaveRol(array $datos){
        return $this->Rol->SaveRol($datos);
    }

    function UpdateRol(array $datos){
        return $this->Rol->UpdateRol($datos);
    }

    function DeleteRol(array $datos){
        return $this->Rol->DeleteRol($datos);
    }
    
}
