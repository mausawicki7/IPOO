require_once('Viaje.php');

// Creamos un objeto Viaje con valores iniciales
$vuelo = new Viaje('001', 'Buenos Aires', 5);

// Menú principal
while (true) {
    echo "=== Menú de prueba de clase Viaje ===\n\n";
    echo "1. Agregar pasajero\n";
    echo "2. Eliminar pasajero\n";
    echo "3. Modificar pasajero\n";
    echo "4. Mostrar información del vuelo\n";
    echo "5. Salir\n\n";
    $opcion = readline("Ingrese una opción: ");

    switch ($opcion) {
        case 1:
            $nombre = readline("Ingrese el nombre del pasajero: ");
            $apellido = readline("Ingrese el apellido del pasajero: ");
            $dni = readline("Ingrese el DNI del pasajero: ");
            if ($vuelo->agregarPasajero($nombre, $apellido, $dni)) {
                echo "El pasajero ha sido agregado al vuelo.\n";
            } else {
                echo "No se pudo agregar al pasajero. Se supero la cantidad maxima permitida de este vuelo o intentó agregar un pasajero que ya está en este vuelo.\n";
            }
            break;
        case 2:
            $dni = readline("Ingrese el DNI del pasajero a eliminar: ");
            if ($vuelo->eliminarPasajero($dni)) {
                echo "El pasajero ha sido eliminado del vuelo.\n";
            } else {
                echo "No se pudo eliminar al pasajero del vuelo. No se encontró un pasajero con el DNI ingresado o ya no hay pasajeros en este vuelo. \n";
            }
            break;
        case 3:
            $dni = readline("Ingrese el DNI del pasajero a modificar: ");
            $nombre = readline("Ingrese el nuevo nombre del pasajero: ");
            $apellido = readline("Ingrese el nuevo apellido del pasajero: ");
            if ($vuelo->modificarPasajero($dni, $nombre, $apellido)) {
                echo "El pasajero ha sido modificado en el vuelo.\n";
            } else {
                echo "No se pudo modificar al pasajero en el vuelo. No se encontró un pasajero con el DNI ingresado.\n";
            }
            break;
        case 4:
            echo $vuelo;
            break;
        case 5:
            exit();
        default:
            echo "Opción inválida. Por favor, intente nuevamente.\n";
    }

    readline("Presione Enter para continuar...");
}
