<?php

class ResponsableV {
    
    private $nombre;
    private $apellido;
    private $nroLicencia;
    private $nroEmpleado;
    
    public function __construct($unNombre, $unApellido, $nroLic, $nroEmp){
        $this->nombre = $unNombre;
        $this->apellido = $unApellido;
        $this->nroLicencia = $nroLic;
        $this->nroEmpleado = $nroEmp;
    }
    
    public function setNombre($unNombre){
        $this->nombre = $unNombre;
    }
    
    public function setApellido($unApellido){
        $this->apellido = $unApellido;
    }
    
    public function setNroLicencia($nroLic){
        $this->nroLicencia = $nroLic;
    }
    
    public function setNroEmpleado($nroEmp){
        $this->nroEmpleado = $nroEmp;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function getApellido(){
        return $this->apellido;
    }
    
    public function getNroLicencia(){
        return $this->nroLicencia;
    }
    
    public function getNroEmpleado(){
        return $this->nroEmpleado;
    }
    
}