<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Biblioteca</title>
</head>
<body>
    <div class="sidebar">
        <h3>Menú</h3>
        <a href="index.php?controller=biblioteca&action=index">Biblioteca</a>
        <a href="index.php?controller=prestamo&action=index">Préstamos</a>
        <a href="index.php?controller=equipo&action=index">Equipos</a>
        <a href="index.php?controller=auth&action=logout">Cerrar sesión</a>
    </div>
    <h1 class="titulo">Libros</h1>
    <a href="index.php?controller=biblioteca&action=add">Agregar Libro</a>
    <?php if (isset($libro) && is_array($libro)): ?>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Año</th>
            <th>Genero</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($libro as $l): ?>
            <tr>
                <td><?= $l['id'] ?></td>
                <td><?= $l['titulo'] ?></td>
                <td><?= $l['autor'] ?></td>
                <td><?= $l['año'] ?></td>
                <td><?= $l['genero'] ?></td>
                <td>
                    <a href="index.php?controller=biblioteca&action=edit&id=<?= $l['id'] ?>" class="btn-editar">Editar</a>
                    <a href="index.php?controller=biblioteca&action=delete&id=<?= $l['id'] ?>" class="btn-eliminar" onclick="return confirm('¿Eliminar?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php else: ?>
        <p>No hay libros cargados.</p>
    <?php endif; ?>
    <footer class="footer">
        <span class="footer-text">Desarrollado por Axel Miranda - Desde 2025</span>
    </footer>
</body>
</html>
