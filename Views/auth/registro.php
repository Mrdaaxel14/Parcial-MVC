<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Registro de Usuario</title>
</head>
<body>
    <div class="login-container">
        <h2 class="login-title">Registro de Usuario</h2>
        <form method="post" action="index.php?controller=auth&action=registrar"class="login-form">
            <input type="text" name="usuario" placeholder="Usuario" class="login-input" required>
            <input type="password" name="clave" placeholder="Contraseña" class="login-input" required>
            <button type="submit"class="btn-login">Registrarse</button>
        </form>
    </div>
    <footer class="footer">
        <span class="footer-text">Desarrollado por Axel Miranda - Desde 2025</span>
    </footer>
</body>
</html>