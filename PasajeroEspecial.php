<?php
class PasajeroEspecial extends Pasajero
{
    private $requiereSillaRuedas;
    private $requiereAsistencia;
    private $requiereComida;

    public function __construct($nombre, $apellido, $nroDocumento, $telefono, $nroAsiento, $nroTicket, $requiereSilla, $requiereAsist, $requiereComida)
    {
        parent::__construct($nombre, $apellido, $nroDocumento, $telefono, $nroAsiento, $nroTicket);
        $this->requiereSillaRuedas = $requiereSilla;
        $this->requiereAsistencia = $requiereAsist;
        $this->requiereComida = $requiereComida;
    }

    //Getters
    public function get_requiereSillaRuedas()
    {
        return $this->requiereSillaRuedas;
    }

    public function get_requiereAsistencia()
    {
        return $this->requiereAsistencia;
    }

    public function get_requiereComida()
    {
        return $this->requiereComida;
    }

    //Setters
    public function set_requiereSillaRuedas($requiereSilla)
    {
        $this->requiereSillaRuedas = $requiereSilla;
    }

    public function set_requiereAsistencia($requiereAsist)
    {
        $this->requiereAsistencia = $requiereAsist;
    }

    public function set_requiereComida($requiereComida)
    {
        $this->requiereComida = $requiereComida;
    }

    public function darPorcentajeIncremento(){
        $porcentaje = 10;
        if ($this->requiereSillaRuedas && $this->requiereAsistencia && $this->requiereComida) {
            $porcentaje = 30;
        } elseif ($this->requiereSillaRuedas || $this->requiereAsistencia || $this->requiereComida) {
            $porcentaje = 15;
        }
        return $porcentaje;
    }

    public function __toString()
    {
        $str = parent::__toString();
        $str .= "\n ¿Requiere silla de ruedas?: " . $this->get_requiereSillaRuedas();
        $str .= "\n ¿Requiere asistencia?: " . $this->get_requiereAsistencia();
        $str .= "\n ¿Requiere comida?: " . $this->get_requiereComida();
        return $str;
    }
}
