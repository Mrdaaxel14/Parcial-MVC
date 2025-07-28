<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($libro) ? "Editar Libro" : "Agregar Libro"; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-libro-container">
        <h1 class="form-libro-title"><?php echo isset($libro) ? "Editar Libro" : "Agregar Libro"; ?></h1>
        <form action="index.php?controller=biblioteca&action=save" method="post" class="form-libro">
            <input type="hidden" name="id" value="<?php echo $libro['id'] ?? '' ?>">

            <label for="titulo" class="form-libro-label">Título:</label>
            <input type="text" id="titulo" name="titulo" value="<?php echo $libro['titulo'] ?? '' ?>" required class="form-libro-input">

            <label for="autor" class="form-libro-label">Autor:</label>
            <input type="text" id="autor" name="autor" value="<?php echo $libro['autor'] ?? '' ?>" required class="form-libro-input">

            <label for="anio" class="form-libro-label">Año:</label>
            <input type="date" id="anio" name="anio" value="<?php echo $libro['año'] ?? '' ?>" required class="form-libro-input">

            <label for="genero" class="form-libro-label">Género:</label>
            <input type="text" id="genero" name="genero" value="<?php echo $libro['genero'] ?? '' ?>" required class="form-libro-input">

            <button type="submit" class="btn-libro-guardar">Guardar</button>
            <a href="index.php?controller=biblioteca&action=index" class="btn-cancelar">Cancelar</a>
        </form>
    </div>
    <footer class="footer">
        <span class="footer-text">Desarrollado por Axel Miranda - Desde 2025</span>
    </footer>
</body>
</html>

