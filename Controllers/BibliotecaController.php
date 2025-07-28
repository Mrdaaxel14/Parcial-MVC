<?php
require_once './Models/Biblioteca.php';
require_once './Config/Database.php';

class BibliotecaController {
    public function index() {
        $libro = Biblioteca::getAll();
        include './Views/biblioteca/index.php';
    }

    public function add() {
        $libro = null;
        include './Views/biblioteca/libroForm.php';
    }

    public function edit() {
        $libro = Biblioteca::getById($_GET['id']);
        include './Views/biblioteca/libroForm.php';
    }

    public function save() {
        $libro = new Biblioteca(
            $_POST['titulo'],
            $_POST['autor'],
            $_POST['anio'],
            $_POST['genero'],
            $_POST['id'] ?? null
        );
        if ($libro->save()) {
            header('Location: index.php?controller=biblioteca&action=index');
        } else {
            echo "<p>Error al guardar el libro</p>";
        }
    }

    public function delete() {
        if (isset($_GET['id'])) {
            Biblioteca::delete($_GET['id']);
            header('Location: index.php?controller=biblioteca&action=index');
        } else {
            echo "<p>ID no especificado</p>";
        }
    }
}
?>