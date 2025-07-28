<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Prestamos</title>
</head>
<body>
    <div class="sidebar">
        <h3>Menú</h3>
        <a href="index.php?controller=biblioteca&action=index">Biblioteca</a>
        <a href="index.php?controller=prestamo&action=index">Préstamos</a>
        <a href="index.php?controller=equipo&action=index">Equipos</a>
        <a href="index.php?controller=auth&action=logout">Cerrar sesión</a>
    </div>
    <h1 class="titulo">Lista de Préstamos</h1>
    <a href="index.php?controller=prestamo&action=crear" class="btn-nuevo">Nuevo Préstamo</a>
    <?php if (isset($prestamo) && is_array($prestamo)): ?>
    <table class="table table-prestamos">
        <tr>
            <th>ID</th>
            <th>ID Libro</th>
            <th>Alumno</th>
            <th>Fecha Préstamo</th>
            <th>Fecha Devolución</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($prestamo as $p): ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['id_libro'] ?></td>
                <td><?= $p['nombre_alumno'] ?></td>
                <td><?= $p['fecha_prestamo'] ?></td>
                <td><?= $p['fecha_devolucion'] ?></td>
                <td>
                    <a href="index.php?controller=prestamo&action=editar&id=<?= $p['id'] ?>" class="btn-editar">Editar</a>
                    <a href="index.php?controller=prestamo&action=eliminar&id=<?= $p['id'] ?>" class="btn-eliminar" onclick="return confirm('¿Eliminar?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php else: ?>
        <p class="mensaje-vacio">No hay préstamos cargados.</p>
    <?php endif; ?>
    <footer class="footer">
        <span class="footer-text">Desarrollado por Axel Miranda - Desde 2025</span>
    </footer>
</body>
</html>