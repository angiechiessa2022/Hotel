<?php
include('clases.php');

echo '<h2>Listado de Órdenes</h2>';

if (!empty(Reserva::$reservas)) {
    echo '<table border="1">';
    echo '<tr>';
    echo '<th>Número de Personas</th>';
    echo '<th>Número de Habitaciones</th>';
    echo '<th>Tipo de Habitación</th>';
    echo '<th>Con Vista</th>';
    echo '<th>Con Desayuno</th>';
    echo '<th>Días de Reserva</th>';
    echo '<th>Cliente</th>';
    echo '<th>Precio Total</th>';
    echo '</tr>';

    foreach (Reserva::$reservas as $reserva) {
        echo '<tr>';
        echo '<td>' . $reserva->getNumPersonas() . '</td>';
        echo '<td>' . $reserva->getNumHabitaciones() . '</td>';
        echo '<td>' . $reserva->getTipoHabitacion() . '</td>';
        echo '<td>' . ($reserva->getConVista() ? 'Sí' : 'No') . '</td>';
        echo '<td>' . ($reserva->getConDesayuno() ? 'Sí' : 'No') . '</td>';
        echo '<td>' . $reserva->getDiasReserva() . '</td>';
        echo '<td>' . $reserva->getCliente() . '</td>';
        echo '<td>' . $reserva->getPrecioTotal() . '</td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo "No hay órdenes registradas.";
}
?>
