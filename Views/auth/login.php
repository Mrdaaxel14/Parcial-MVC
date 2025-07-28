<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="login-container">
        <h2 class="login-title">Login</h2>
        <form method="post" action="index.php?controller=auth&action=login" class="login-form">
            <input type="text" name="usuario" placeholder="Usuario" required class="login-input">
            <input type="password" name="clave" placeholder="Contraseña" required class="login-input">
            <button type="submit" class="btn-login">Ingresar</button>
        </form>
        <div class="login-register">
            <p class="user_answer">¿No tenés una cuenta?</p>
            <a href="index.php?controller=auth&action=registrar" class="btn-registrar">Registrarse</a>
        </div>
    </div>
    <footer class="footer">
        <span class="footer-text">Desarrollado por Axel Miranda - Desde 2025</span>
    </footer>
</body>
</html>