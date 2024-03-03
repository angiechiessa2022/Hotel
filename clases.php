<?php
class Reserva {
    private $num_personas;
    private $num_habitaciones;
    private $tipo_habitacion;
    private $con_vista;
    private $con_desayuno;
    private $dias_reserva;
    private $cliente;
    private $precio_base = 100;
    private $precio_total;

    public static $reservas = array();

    public function __construct($num_personas, $num_habitaciones, $tipo_habitacion, $con_vista, $con_desayuno, $dias_reserva, $cliente) {
        $this->num_personas = $num_personas;
        $this->num_habitaciones = $num_habitaciones;
        $this->tipo_habitacion = $tipo_habitacion;
        $this->con_vista = $con_vista;
        $this->con_desayuno = $con_desayuno;
        $this->dias_reserva = $dias_reserva;
        $this->cliente = $cliente;
        $this->precio_total = 0;
    }

    public function calcularPrecioTotal() {
        $precio_total = $this->precio_base * $this->dias_reserva;
        $precio_total += $this->con_vista ? 20 : 0;
        $precio_total += $this->con_desayuno ? 10 : 0;
        $precio_total += $precio_total * 0.15;
        $precio_total += $precio_total * 0.18;
        $this->precio_total = $precio_total;
    }

    public function guardarReserva() {
        self::$reservas[] = $this;
    }

    public static function generarOptionsTipoHabitacion() {
        $tipos = ['Individual', 'Doble', 'Suite'];
        $options = '';
        foreach ($tipos as $tipo) {
            $options .= "<option value='$tipo'>$tipo</option>";
        }
        return $options;
    }

    public function getNumPersonas() {
        return $this->num_personas;
    }

    public function getNumHabitaciones() {
        return $this->num_habitaciones;
    }

    public function getTipoHabitacion() {
        return $this->tipo_habitacion;
    }

    public function getConVista() {
        return $this->con_vista;
    }

    public function getConDesayuno() {
        return $this->con_desayuno;
    }

    public function getDiasReserva() {
        return $this->dias_reserva;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getPrecioTotal() {
        return $this->precio_total;
    }
}
?>
