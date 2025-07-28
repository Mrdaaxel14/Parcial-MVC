<?php
session_start();
$controller = $_GET['controller'] ?? 'auth';
$action = $_GET['action'] ?? 'login';

switch ($controller) {
    case 'equipo':
        require_once './Controllers/EquipoController.php';
        $ctrl = new EquipoController();
        break;
    case 'prestamo':
        require_once './Controllers/PrestamoController.php';
        $ctrl = new PrestamoController();
        break;
    case 'biblioteca':
        require_once './Controllers/BibliotecaController.php';
        $ctrl = new BibliotecaController();
        break;
    case 'auth':
        require_once './Controllers/AuthController.php';
        $ctrl = new AuthController();
        break;
    default:
        die("Controlador no encontrado");
}

// Depuración: muestra el nombre de la clase y el método
/*echo "<pre>Controlador: " . get_class($ctrl) . "\nAcción: " . $action . "</pre>";*/

if (!method_exists($ctrl, $action)) {
    die("Acción no válida");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ctrl->$action($_POST);
} else {
    $ctrl->$action($_GET);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Escolar</title>
</head>
<body>
</body>
</html>