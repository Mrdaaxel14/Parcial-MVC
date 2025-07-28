<?php
class Prestamo {
    private $id;
    private $id_libro;
    private $nombre_alumno;
    private $fecha_prestamo;
    private $fecha_devolucion;

    public function __construct($id_libro, $nombre_alumno, $fecha_prestamo, $fecha_devolucion, $id = null) {
        $this->id = $id;
        $this->id_libro = $id_libro;
        $this->nombre_alumno = $nombre_alumno;
        $this->fecha_prestamo = $fecha_prestamo;
        $this->fecha_devolucion = $fecha_devolucion;
    }

    public static function listar() {
        $conn = Database::connect();
        $stmt = $conn->prepare("SELECT * FROM prestamos");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardar() {
        $conn = Database::connect();
        if ($this->id) {
            $stmt = $conn->prepare("UPDATE prestamos SET id_libro = ?, nombre_alumno = ?, fecha_prestamo = ?, fecha_devolucion = ? WHERE id = ?");
            return $stmt->execute([$this->id_libro, $this->nombre_alumno, $this->fecha_prestamo, $this->fecha_devolucion, $this->id]);
        } else {
            $stmt = $conn->prepare("INSERT INTO prestamos (id_libro, nombre_alumno, fecha_prestamo, fecha_devolucion) VALUES (?, ?, ?, ?)");
            return $stmt->execute([$this->id_libro, $this->nombre_alumno, $this->fecha_prestamo, $this->fecha_devolucion]);
        }
    }

    public static function obtenerId($id) {
        $conn = Database::connect();
        $stmt = $conn->prepare("SELECT * FROM prestamos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function eliminar($id) {
        $conn = Database::connect();
        $stmt = $conn->prepare("DELETE FROM prestamos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>