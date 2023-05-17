/******************************************************************************

TP 1 - Entregable 
IPOO 2023
Universidad Nacional del Comahue
Sawicki Mauricio
https://mausa.dev/

*******************************************************************************/

<?php
class Viaje {
    private $codigo;
    private $destino;
    private $cantMaxPasajeros;
    private $colPasajeros;
    private $responsableV;
    private $costo;

    public function __construct($codigo, $destino, $cantMaxPasajeros, $unResponsable, $costo){
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->cantMaxPasajeros = $cantMaxPasajeros;
        $this->responsableV = $unResponsable;
        $this->costo = $costo;
        $this->colPasajeros = array();
    }
    
    public function getCodigo(){
        return $this->codigo;
    }
    
    public function getDestino(){
        return $this->destino;
    }
    
    public function getCantMaxPasajeros(){
        return $this->cantMaxPasajeros;
    }
    
    public function getColPasajeros(){
        return $this->colPasajeros;
    }
    
    public function getResponsable(){
    return $this->responsableV;
    }

    public function getCosto(){
        return $this->costo;
    }
    
    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    
    public function setDestino($destino){
        $this->destino = $destino;
    }
    
    public function setCantMaxPasajeros($cantMaxPasajeros){
        $this->cantMaxPasajeros = $cantMaxPasajeros;
    }
    
    public function setPasajeros($pasajeros){
        $this->colPasajeros = $pasajeros;
    }
    
    public function setResponsable($responsable){
        $this->responsableV = $responsable;
    }

    public function setCosto($costo){
        $this->costo = $costo;
    } 
    
    public function agregarResponsable($nombre, $apellido, $nroLicencia, $nroEmpleado){
        $exito = false;
        $nroLicenciaResponsableActual = $this->responsableV->getNroLicencia();
        
        if($nroLicenciaResponsableActual != $nroLicencia){
            $nuevoResponsable = new ResponsableV($nombre, $apellido, $nroLicencia, $nroEmpleado);
            $this->setResponsable($nuevoResponsable);
            $exito = true;
        }
        return $exito;
    }
    
    public function agregarPasajero($nombre, $apellido, $numDoc, $telefono, $nroAsiento, $nroTicket){
        $exito = false;
        $colPasajeros = $this->getColPasajeros();
        $cantMax = $this->getCantMaxPasajeros();
        $cantActual = count($colPasajeros);
        $i = 0;

     if($cantActual < $cantMax){
        /* Aun no se supera cantMax de pasajeros, puedo agregar al pasajero. */
         $existePasajero = false;
          while($i < $cantActual && !$existePasajero){
              $numDocumento = $colPasajeros[$i]->getnroDocumento();
             if($numDocumento == $numDoc){
                /* Ya existe un pasajero con el mismo número de documento, no se puede agregar al nuevo pasajero. */
                 $existePasajero = true;
             }
             $i++;
          }
                if(!$existePasajero){
                /* No existe un pasajero con el mismo número de documento, puedo agregar al nuevo pasajero. */
                $nuevoPasajero = new Pasajero($nombre, $apellido, $numDoc, $telefono, $nroAsiento, $nroTicket); // Creo una instancia del objeto Pasajero
                $this->colPasajeros[] = $nuevoPasajero; // Agrego la instancia a la coleccion
                $exito = true;
        }
    }
        return $exito;
    }

    public function eliminarPasajero($numDoc){
        $exito = false;
        $colPasajeros = $this->getColPasajeros();
        $cantActual = count($colPasajeros);
        $i = 0;
        
        while($i < $cantActual && !$exito){
         // if($colPasajeros[$i]['nroDocumento'] == $numDoc){ (de esta manera se accede como array)
             if($colPasajeros[$i]->getnroDocumento() == $numDoc){ //de esta manera como objeto

            /* Se encontró al pasajero que se desea eliminar. */
            unset($colPasajeros[$i]);  // Elimina al pasajero del array.
            $pasajeros = array_values($colPasajeros);  // Reorganiza los índices del array.
            $this->setPasajeros($colPasajeros);
            $exito = true;
        }
        $i++;
    }
      return $exito;
    }


    public function modificarPasajero($numDoc, $nombre, $apellido, $telefono){
        $exito = false;
        $colPasajeros = $this->getColPasajeros();
        $cantActual = count($colPasajeros);
        $i = 0;
        
     while($i < $cantActual && !$exito){
        if($colPasajeros[$i]->getnroDocumento() == $numDoc){
            /* Se encontró al pasajero que se desea modificar. */
            $colPasajeros[$i]->setNombre($nombre);  
            $colPasajeros[$i]->setApellido($apellido);  
            $colPasajeros[$i]->setTelefono($telefono);
            $this->setPasajeros($colPasajeros);
            $exito = true;
        }
        $i++;
    }
    return $exito;
    }

 
    /* Modificar la clase viaje para almacenar el costo del viaje, la suma de los costos abonados por los pasajeros 
    e implementar el método venderPasaje($objPasajero) que debe incorporar el pasajero a la colección de pasajeros (solo si hay espacio
    disponible), actualizar los costos abonados y retornar el costo final que deberá ser abonado por el pasajero.*/

    public function venderPasaje($objPasajero){
        $colPasajeros = $this->getColPasajeros();
        $cantMax = $this->getCantMaxPasajeros();
        $cantActual = count($colPasajeros);
        $i = 0;
        $numDoc = $objPasajero->getnroDocumento();
        $costo = $this->getCosto();
        $costoTotal = 0;
        $costoFinal = 0;

        if($cantActual < $cantMax){
        /* Aun no se supera cantMax de pasajeros, puedo vender un pasaje. */
         $existePasajero = false;
          while($i < $cantActual && !$existePasajero){
              $numDocumento = $colPasajeros[$i]->getnroDocumento();
             if($numDocumento == $numDoc){
                /* Ya existe un pasajero con el mismo número de documento, no se pueden vender 2 pasaje con el mismo numDoc. */
                 $existePasajero = true;
             }
             $i++;
          }
                if(!$existePasajero){
                /* No existe un pasajero con el mismo número de documento, puedo vender el pasaje */
                $this->colPasajeros[] = $objPasajero; // Agrego la instancia a la coleccion
                $costoTotal = $costo * $cantActual;
                $costoFinal += $costoTotal;
        }
    }
    return $costoFinal;
}

    /* Implemente la función hayPasajesDisponible() que retorna verdadero si la cantidad de pasajeros 
    del viaje es menor a la cantidad máxima de pasajeros y falso caso contrario */
    
    public function hayPasajesDisponible(){
        $colPasajeros = $this->getColPasajeros();
        $cantMax = $this->getCantMaxPasajeros();
        $cantActual = count($colPasajeros);
        $hayPasajes = false;

        if($cantActual < $cantMax){
            $hayPasajes = true;
        }
        return $hayPasajes;
    }

    
    public function __toString() {
    $str = "Viaje: ".$this->getDestino()." ".$this->getCodigo()."\n";
    $str .= "Responsable: ".$this->responsableV->getNombre()." ".$this->responsableV->getApellido()."\n";
    $str .= "Pasajeros:\n";
    foreach($this->getColPasajeros() as $pasajero) {
        $str .= "- ".$pasajero->getNombre()." ".$pasajero->getApellido().", Nro. de doc: ".$pasajero->getnroDocumento().", Teléfono: ".$pasajero->getTelefono()."\n";
    }
    return $str;
    }


    
}