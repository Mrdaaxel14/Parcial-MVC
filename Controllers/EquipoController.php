<?php
require_once './Models/InventarioEquipos.php';
require_once './Config/Database.php';

class EquipoController {
    public function index() {
        $equipo = Equipo::getAll();
        include './Views/inventarioEquipos/index.php';
    }

    public function add() {
        $equipo = null;
        include './Views/inventarioEquipos/equipoForm.php';
    }

    public function edit() {
        $equipo = Equipo::getById($_GET['id']);
        include './Views/inventarioEquipos/equipoForm.php';
    }

    public function save() {
        $equipo = new Equipo(
            $_POST['nombre_equipo'],
            $_POST['cantidad'],
            $_POST['estado'],
            $_POST['id'] ?? null
        );
        if ($equipo->save()) {
            header('Location: index.php?controller=equipo&action=index');
        } else {
            echo "<p>Error al guardar el libro</p>";
        }
    }

    public function delete() {
        if (isset($_GET['id'])) {
            Biblioteca::delete($_GET['id']);
            header('Location: index.php?controller=equipo&action=index');
        } else {
            echo "<p>ID no especificado</p>";
        }
    }
}
?>