<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($prestamo) ? "Editar Préstamo" : "Crear Préstamo"; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-libro-container">
        <h1 class="form-libro-title"><?php echo isset($prestamo) ? "Editar Préstamo" : "Crear Préstamo"; ?></h1>
        <form action="index.php?controller=prestamo&action=guardar" method="post" class="form-libro">
            <input type="hidden" name="id" value="<?php echo $prestamo['id'] ?? '' ?>">

            <label for="id_libro" class="form-libro-label">Id del libro:</label>
            <input type="text" id="id_libro" name="id_libro" value="<?php echo $prestamo['id_libro'] ?? '' ?>" required class="form-libro-input">

            <label for="nombre_alumno" class="form-libro-label">Nombre del alumno:</label>
            <input type="text" id="nombre_alumno" name="nombre_alumno" value="<?php echo $prestamo['nombre_alumno'] ?? '' ?>" required class="form-libro-input">

            <label for="fecha_prestamo" class="form-libro-label">Fecha del préstamo:</label>
            <input type="date" id="fecha_prestamo" name="fecha_prestamo" value="<?php echo $prestamo['fecha_prestamo'] ?? '' ?>" required class="form-libro-input">

            <label for="fecha_devolucion" class="form-libro-label">Fecha de devolución:</label>
            <input type="date" id="fecha_devolucion" name="fecha_devolucion" value="<?php echo $prestamo['fecha_devolucion'] ?? '' ?>" required class="form-libro-input">

            <button type="submit" class="btn-libro-guardar">Guardar</button>
            <a href="index.php?controller=prestamo&action=index" class="btn-cancelar">Cancelar</a>
        </form>
    </div>
    <footer class="footer">
        <span class="footer-text">Desarrollado por Axel Miranda - Desde 2025</span>
    </footer>
</body>
</html>
