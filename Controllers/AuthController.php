<?php
require_once './Models/Usuario.php';
require_once './Config/Database.php';

class AuthController {
    private $model;

    public function __construct() {
        $db = (new Database())->connect();
        $this->model = new Usuario($db);
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = $_POST['usuario'];
            $pass = $_POST['clave'];
            if ($this->model->verificar($user, $pass)) {
                $_SESSION['usuario'] = $user;
                header("Location: index.php?controller=biblioteca&action=index");
                exit;
            } else {
                echo "<p>Credenciales inválidas</p>";
            }
        }
        include './Views/auth/login.php';
    }

    public function logout() {
        session_destroy();
        header("Location: index.php");
    }

    public function registrar() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $usuario = $_POST['usuario'];
        $clave = password_hash($_POST['clave'], PASSWORD_DEFAULT);

        if ($this->model->insertar($usuario, $clave)) {
            echo "<p>Usuario registrado correctamente</p>";
            echo "<a href='index.php?controller=auth&action=login'>Ir al login</a>";
        } else {
            echo "<p>Error al registrar usuario</p>";
        }
    } else {
        include './Views/auth/registro.php';
    }
}

}

?>