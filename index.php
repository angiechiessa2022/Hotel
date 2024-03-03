<?php
echo "¡Bienvenido a mi repositorio!\n";
echo "URL del Repositorio: https://github.com/angiechiessa2022/Hotel.git";
?>

<?php
include('clases.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $reserva = new Reserva(
        $_POST['num_personas'],
        $_POST['num_habitaciones'],
        $_POST['tipo_habitacion'],
        isset($_POST['con_vista']),
        isset($_POST['con_desayuno']),
        $_POST['dias_reserva'],
        $_POST['cliente']
    );

    $reserva->calcularPrecioTotal();
    $reserva->guardarReserva();

    header('Location: mostrar_orden.php');
    exit();
}
?>


<form action="" method="post">
    <label>Número de Personas: <input type="text" name="num_personas"></label><br>
    <label>Número de Habitaciones: <input type="text" name="num_habitaciones"></label><br>
    <label>Tipo de Habitación: <select name="tipo_habitacion"><?php echo Reserva::generarOptionsTipoHabitacion(); ?></select></label><br>
    <label>Con Vista: <input type="checkbox" name="con_vista"></label><br>
    <label>Con Desayuno Incluido: <input type="checkbox" name="con_desayuno"></label><br>
    <label>Días de Reserva: <input type="text" name="dias_reserva"></label><br>
    <label>Cliente: <input type="text" name="cliente"></label><br>
    <input type="submit" value="Realizar Reserva">
</form>
`
