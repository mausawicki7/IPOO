<<<<<<< HEAD
<?php
include_once("Viaje.php");
include_once("ResponsableV.php");
include_once("Pasajero.php");

//Creamos un responsable del viaje
$responsable = new ResponsableV('Will', 'Smith', '00123', '2256');

// Creamos un objeto Viaje con valores iniciales
$vuelo = new Viaje('001', 'Buenos Aires', 6, $responsable);

//Agregamos 5 pasajeros al vuelo
$vuelo->agregarPasajero("Juan", "Perez", "12345678", "555-1234");
$vuelo->agregarPasajero("Maria", "Gomez", "23456789", "555-5678");
$vuelo->agregarPasajero("Pedro", "Rodriguez", "34567890", "555-9012");
$vuelo->agregarPasajero("Ana", "Lopez", "45678901", "555-3456");
$vuelo->agregarPasajero("Luis", "Garcia", "56789012", "555-6789");

=======
require_once('Viaje.php');

// Creamos un objeto Viaje con valores iniciales
$vuelo = new Viaje('001', 'Buenos Aires', 5);
>>>>>>> b278b80f4082786e5d01e2ae99bfd8abdb8afd17

// Menú principal
while (true) {
    echo "=== Menú de prueba de clase Viaje ===\n\n";
    echo "1. Agregar pasajero\n";
    echo "2. Eliminar pasajero\n";
    echo "3. Modificar pasajero\n";
<<<<<<< HEAD
    echo "4. Agregar un responsable\n";
    echo "5. Mostrar información del vuelo\n";
    echo "6. Salir\n\n";
=======
    echo "4. Mostrar información del vuelo\n";
    echo "5. Salir\n\n";
>>>>>>> b278b80f4082786e5d01e2ae99bfd8abdb8afd17
    $opcion = readline("Ingrese una opción: ");

    switch ($opcion) {
        case 1:
            $nombre = readline("Ingrese el nombre del pasajero: ");
            $apellido = readline("Ingrese el apellido del pasajero: ");
            $dni = readline("Ingrese el DNI del pasajero: ");
<<<<<<< HEAD
            $telefono =readline("Ingrese el telefono del pasajero: ");
            if ($vuelo->agregarPasajero($nombre, $apellido, $dni, $telefono)) {
=======
            if ($vuelo->agregarPasajero($nombre, $apellido, $dni)) {
>>>>>>> b278b80f4082786e5d01e2ae99bfd8abdb8afd17
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
<<<<<<< HEAD
            $telefono = readline("Ingrese el nuevo telefono del pasajero: ");
            if ($vuelo->modificarPasajero($dni, $nombre, $apellido, $telefono)) {
=======
            if ($vuelo->modificarPasajero($dni, $nombre, $apellido)) {
>>>>>>> b278b80f4082786e5d01e2ae99bfd8abdb8afd17
                echo "El pasajero ha sido modificado en el vuelo.\n";
            } else {
                echo "No se pudo modificar al pasajero en el vuelo. No se encontró un pasajero con el DNI ingresado.\n";
            }
            break;
        case 4:
<<<<<<< HEAD
            $nombre = readline("Ingrese el nombre del responsable: ");
            $apellido = readline("Ingrese el apellido del responsable: ");
            $nroLicencia = readline("Ingrese el N° de licencia del responsable: ");
            $nroEmpleado = readline("Ingrese el N° de empleado del responsable: ");
            if ($vuelo->agregarResponsable($nombre, $apellido, $nroLicencia, $nroEmpleado)) {
                echo "El responsable ha sido agregado al vuelo.\n";
            } else {
                echo "No se pudo agregar al responsable..\n";
            }
            break;
        case 5:
            echo $vuelo;
            break;
        case 6:
=======
            echo $vuelo;
            break;
        case 5:
>>>>>>> b278b80f4082786e5d01e2ae99bfd8abdb8afd17
            exit();
        default:
            echo "Opción inválida. Por favor, intente nuevamente.\n";
    }

    readline("Presione Enter para continuar...");
<<<<<<< HEAD
}
=======
}
>>>>>>> b278b80f4082786e5d01e2ae99bfd8abdb8afd17
