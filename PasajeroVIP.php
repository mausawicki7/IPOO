<?php
class PasajeroVIP extends Pasajero
{
    private $nroViajeroFrecuente;
    private $cantMillas;

    public function __construct($nombre, $apellido, $nroDocumento, $telefono, $nroAsiento, $nroTicket, $nroViajeroF, $cantMillas)
    {
        parent::__construct($nombre, $apellido, $nroDocumento, $telefono, $nroAsiento, $nroTicket);
        $this->nroViajeroFrecuente = $nroViajeroF;
        $this->cantMillas = $cantMillas;
    }

    public function get_nroViajeroFrecuente()
    {
        return $this->nroViajeroFrecuente;
    }

    public function set_nroViajeroFrecuente($unNumero)
    {
        $this->nroViajeroFrecuente = $unNumero;
    }

    public function get_cantMillas()
    {
        return $this->cantMillas;
    }

    public function set_cantMillas($unaCantidad)
    {
        $this->cantMillas = $unaCantidad;
    }

    public function darPorcentajeIncremento(){
        $porcentajeIncremento = 35;

        if ($this->cantMillas > 300) {
            $porcentajeIncremento += 30;
        }

        return $porcentajeIncremento;
    }

    public function __toString()
    {
        $str = parent::__toString();
        $str .= "\n N° Viajero frecuente: " . $this->get_nroViajeroFrecuente();
        $str .= "\n Cant. Millas: " . $this->get_cantMillas();
        return $str;
    }
}
