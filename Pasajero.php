<?php
class Pasajero {
    
    private $nombre;
    private $apellido;
    private $nroDocumento;
    private $telefono;
    private $nroAsiento;
    private $nroTicket;
    
    public function __construct($nombre, $apellido, $nroDocumento, $telefono, $nroAsiento, $nroTicket) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->nroDocumento = $nroDocumento;
    $this->telefono = $telefono;
    $this->nroAsiento = $nroAsiento;
    $this->nroTicket = $nroTicket;
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

    public function setNroAsiento($unNroAsiento){
        $this->nroAsiento = $unNroAsiento;
    }

    public function setNroTicket($unNroTicket){
        $this->nroTicket = $unNroTicket;
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

    public function getNroAsiento(){
        return $this->nroAsiento;
    }

    public function getNroTicket(){
        return $this->nroTicket;
    } 

    public function darPorcentajeIncremento(){
        return 10;
    }

    public function __toString(){
        return "Nombre: ".$this->getNombre().
        "\n Apellido: ".$this->getApellido().
        "\n DNI: ".$this->getnroDocumento().
        "\n Teléfono: ".$this->getTelefono().
        "\n N° Asiento: ".$this->getNroAsiento().
        "\n N° Ticket: ".$this->getNroTicket();
    }
    
}
