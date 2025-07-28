<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($equipo) ? "Editar Equipo" : "Agregar Equipo"; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-libro-container">
        <h1 class="form-libro-title"><?php echo isset($equipo) ? "Editar Equipo" : "Agregar Equipo"; ?></h1>
        <form action="index.php?controller=equipo&action=save" method="post" class="form-libro">
            <input type="hidden" name="id" value="<?php echo $equipo['id'] ?? '' ?>" required>

            <label for="nombre_equipo" class="form-libro-label">Nombre del equipo:</label>
            <input type="text" id="nombre_equipo" name="nombre_equipo" value="<?php echo $equipo['nombre_equipo'] ?? '' ?>" required class="form-libro-input">

            <label for="cantidad" class="form-libro-label">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" value="<?php echo $equipo['cantidad'] ?? '' ?>" required class="form-libro-input">

            <label for="estado" class="form-libro-label">Estado:</label>
            <input type="text" id="estado" name="estado" value="<?php echo $equipo['estado'] ?? '' ?>" required class="form-libro-input">

            <button type="submit" class="btn-libro-guardar">Guardar</button>
            <a href="index.php?controller=equipo&action=index" class="btn-cancelar">Cancelar</a>
        </form>
    </div>
    <footer class="footer">
        <span class="footer-text">Desarrollado por Axel Miranda - Desde 2025</span>
    </footer>
</body>
</html>

