<?php
class Equipo {
    private $id;
    private $nombre_equipo;
    private $cantidad;
    private $estado;

    public function __construct($nombre_equipo, $cantidad, $estado, $id = null) {
        $this->id = $id;
        $this->nombre_equipo = $nombre_equipo;
        $this->cantidad = $cantidad;
        $this->estado= $estado;
    }

    public static function getAll() {
        $conn = Database::connect();
        $stmt = $conn->prepare("SELECT * FROM inventario_equipos");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id) {
        $conn = Database::connect();
        $stmt = $conn->prepare("SELECT * FROM inventario_equipos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function delete($id) {
        $conn = Database::connect();
        $stmt = $conn->prepare("DELETE FROM inventario_equipos WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function save() {
        $conn = Database::connect();
        if ($this->id) {
            $stmt = $conn->prepare("UPDATE inventario_equipos SET nombre_equipo = ?, cantidad = ?, estado = ? WHERE id = ?");
            return $stmt->execute([$this->nombre_equipo, $this->cantidad, $this->estado, $this->id]);
        } else {
            $stmt = $conn->prepare("INSERT INTO inventario_equipos (nombre_equipo, cantidad, estado) VALUES (?, ?, ?)");
            return $stmt->execute([$this->nombre_equipo, $this->cantidad, $this->estado]);
        }
    }
}
?>