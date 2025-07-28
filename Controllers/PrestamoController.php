<?php
require_once './Models/Prestamo.php';
require_once './Config/Database.php';

class PrestamoController {
    public function index() {
        $prestamo = Prestamo::listar();
        include './Views/prestamos/index.php';
    }

    public function crear() {
        $prestamo = null;
        include './Views/prestamos/prestamoForm.php';
    }

    public function editar() {
        $prestamo = prestamo::obtenerId($_GET['id']);
        include './Views/prestamos/prestamoForm.php';
    }

    public function guardar() {
        $prestamo = new Prestamo(
            $_POST['id_libro'],
            $_POST['nombre_alumno'],
            $_POST['fecha_prestamo'],
            $_POST['fecha_devolucion'],
            $_POST['id'] ?? null
        );
        if ($prestamo->guardar()) {
            header('Location: index.php?controller=prestamo&action=index');
        } else {
            echo "<p>Error al guardar el préstamo</p>";
        }
    }

    public function eliminar() {
        if (isset($_GET['id'])) {
            Prestamo::eliminar($_GET['id']);
            header('Location: index.php?controller=prestamo&action=index');
        } else {
            echo "<p>ID de préstamo no especificado</p>";
        }
    }
}
?>