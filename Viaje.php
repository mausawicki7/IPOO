/******************************************************************************

TP 1 - Entregable 
IPOO 2023
Universidad Nacional del Comahue
Sawicki Mauricio
https://mausa.dev/

*******************************************************************************/

class Viaje {
    private $codigo;
    private $destino;
    private $cantMaxPasajeros;
    private $pasajeros;

    public function __construct($codigo, $destino, $cantMaxPasajeros){
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->cantMaxPasajeros = $cantMaxPasajeros;
        $this->pasajeros = array();
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
    
    public function getPasajeros(){
        return $this->pasajeros;
    }
    
    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    
    public function setDestino($destino){
        $this->$destino = $destino;
    }
    
    public function setCantMaxPasajeros($cantMaxPasajeros){
        $this->$cantMaxPasajeros = $cantMaxPasajeros;
    }
    
    public function setPasajeros($pasajeros){
        $this->pasajeros = $pasajeros;
    }
    
    public function agregarPasajero($nombre, $apellido, $numDoc){
        $exito = false;
        $pasajeros = $this->getPasajeros();
        $cantMax = $this->getCantMaxPasajeros();
        $cantActual = count($pasajeros);
        $i = 0;

     if($cantActual < $cantMax){
        /* Aun no se supera cantMax de pasajeros, puedo agregar al pasajero. */
         $existePasajero = false;
          while($i < $cantActual && !$existePasajero){
             if($pasajeros[$i]['dni'] == $numDoc){
                /* Ya existe un pasajero con el mismo número de documento, no se puede agregar al nuevo pasajero. */
                 $existePasajero = true;
             }
             $i++;
          }
                if(!$existePasajero){
                /* No existe un pasajero con el mismo número de documento, puedo agregar al nuevo pasajero. */
                $nuevoPasajero = array(
                'nombre' => $nombre,
                'apellido' => $apellido,
                'dni' => $numDoc
                );
                  array_push($pasajeros, $nuevoPasajero);
                  $this->setPasajeros($pasajeros);
                  $exito = true;
        }
    }
        return $exito;
    }

    public function eliminarPasajero($numDoc){
        $exito = false;
        $pasajeros = $this->getPasajeros();
        $cantActual = count($pasajeros);
        $i = 0;
        
        while($i < $cantActual && !$exito){
         if($pasajeros[$i]['dni'] == $numDoc){
            /* Se encontró al pasajero que se desea eliminar. */
            unset($pasajeros[$i]);  // Elimina al pasajero del array.
            $pasajeros = array_values($pasajeros);  // Reorganiza los índices del array.
            $this->setPasajeros($pasajeros);
            $exito = true;
        }
        $i++;
    }
      return $exito;
    }


    public function modificarPasajero($numDoc, $nombre, $apellido){
        $exito = false;
        $pasajeros = $this->getPasajeros();
        $cantActual = count($pasajeros);
        $i = 0;
        
     while($i < $cantActual && !$exito){
        if($pasajeros[$i]['dni'] == $numDoc){
            /* Se encontró al pasajero que se desea modificar. */
            $pasajeros[$i]['nombre'] = $nombre;  // Modifica el nombre del pasajero.
            $pasajeros[$i]['apellido'] = $apellido;  // Modifica el apellido del pasajero.
            $this->setPasajeros($pasajeros);
            $exito = true;
        }
        $i++;
    }
    return $exito;
    }
    
    public function __toString(){
    $output = "Vuelo: " . $this->codigo . " - Destino: " . $this->destino . "\n";
    $output .= "Pasajeros:\n";
    if (count($this->pasajeros) > 0) {
        foreach ($this->pasajeros as $pasajero) {
            $output .= "- " . $pasajero['nombre'] . " " . $pasajero['apellido'] . "\n";
        }
    } else {
        $output .= "No hay pasajeros registrados en este vuelo.\n";
    }
    return $output;
 }

    
}
