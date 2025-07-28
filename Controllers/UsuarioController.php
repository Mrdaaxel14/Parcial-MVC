<?php
/*class usuarioController {
    public function index() {
        $usuarios = Usuario::listar();
        include 'views/usuarios/usuario_lista.php';
    }
    public function crear(){
        include 'views/usuarios/usuario_form.php';
    }
    public function editar() {
        $usuario = Usuario::obtenerId($_GET['id']);
        include 'views/usuarios/usuario_form.php';
    }
    public function guardar() {
        $usuario = new Usuario($_POST['id'] ?? null, $_POST['nombre_usuario'], $_POST['contraseña']);
        $usuario->guardar();
        header('Location: index.php');
    }
    public function eliminar() {
        Usuario::eliminar($_GET['id']);
        header('Location: index.php');
    }
}*/
?>