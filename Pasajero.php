<?php
class Pasajero {
    
    private $nombre;
    private $apellido;
    private $nroDocumento;
    private $telefono;
    
    public function __construct($nombre, $apellido, $nroDocumento, $telefono) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->nroDocumento = $nroDocumento;
    $this->telefono = $telefono;
    }
    
    public function setNombre($unNombre){
        $this->nombre = $unNombre;
    }
    
    public function setApellido($unApellido){
        $this->apellido = $unApellido;
    }
    
    public function setnroDocumento($unDni){
        $this->nroDocumento = $unDni;
    }

    public function setTelefono($unTelefono){
        $this->telefono = $unTelefono;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function getApellido(){
        return $this->apellido;
    }
    
    public function getnroDocumento(){
        return $this->nroDocumento;
    }

    
    public function getTelefono(){
        return $this->telefono;
    }
    
}
