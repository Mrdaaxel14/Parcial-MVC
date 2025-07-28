<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inventario de Equipos</title>
</head>
<body>
    <div class="sidebar">
        <h3>Menú</h3>
        <a href="index.php?controller=biblioteca&action=index">Biblioteca</a>
        <a href="index.php?controller=prestamo&action=index">Préstamos</a>
        <a href="index.php?controller=equipo&action=index">Equipos</a>
        <a href="index.php?controller=auth&action=logout">Cerrar sesión</a>
    </div>
    <h1 class="titulo">Inventario de Equipos</h1>
    <a href="index.php?controller=equipo&action=add" class="btn-nuevo">Agregar Equipo</a>
    <?php if (isset($equipo) && is_array($equipo)): ?>
    <table class="table table-equipos">
        <tr>
            <th>Id</th>
            <th>Nombre del Equipo</th>
            <th>Cantidad</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($equipo as $e): ?>
            <tr>
                <td><?= $e['id'] ?></td>
                <td><?= $e['nombre_equipo'] ?></td>
                <td><?= $e['cantidad'] ?></td>
                <td><?= $e['estado'] ?></td>
                <td>
                    <a href="index.php?controller=equipo&action=edit&id=<?= $e['id'] ?>" class="btn-editar">Editar</a>
                    <a href="index.php?controller=equipo&action=delete&id=<?= $e['id'] ?>" class="btn-eliminar" onclick="return confirm('¿Eliminar?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php else: ?>
        <p class="mensaje-vacio">No hay equipos cargados.</p>
    <?php endif; ?>
    <footer class="footer">
        <span class="footer-text">Desarrollado por Axel Miranda - Desde 2025</span>
    </footer>
</body>
</html>
