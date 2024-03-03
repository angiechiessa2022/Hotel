<?php
include('clases.php');
$ultima_reserva = end(Reserva::$reservas);
if (!empty(Reserva::$reservas)) {
    $ultima_reserva = end(Reserva::$reservas);

    if ($ultima_reserva instanceof Reserva) {
    } else {
        echo "No hay reservas.";
    }
} else {
    echo "No hay reservas.";
}
?>

<table border="1">
    <tr>
        <th>Número de Personas</th>
        <th>Número de Habitaciones</th>
        <th>Tipo de Habitación</th>
        <th>Con Vista</th>
        <th>Con Desayuno</th>
        <th>Días de Reserva</th>
        <th>Cliente</th>
        <th>Precio Total</th>
    </tr>
    <tr>
        <td><?php echo $ultima_reserva->num_personas; ?></td>
        <td><?php echo $ultima_reserva->num_habitaciones; ?></td>
        <td><?php echo $ultima_reserva->tipo_habitacion; ?></td>
        <td><?php echo $ultima_reserva->con_vista ? 'Sí' : 'No'; ?></td>
        <td><?php echo $ultima_reserva->con_desayuno ? 'Sí' : 'No'; ?></td>
        <td><?php echo $ultima_reserva->dias_reserva; ?></td>
        <td><?php echo $ultima_reserva->cliente; ?></td>
        <td><?php echo $ultima_reserva->precio_total; ?></td>
    </tr>
</table>
