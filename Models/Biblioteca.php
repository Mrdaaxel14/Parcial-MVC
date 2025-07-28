<?php
class Biblioteca {
    private $id;
    private $titulo;
    private $autor;
    private $anio;
    private $genero;

    public function __construct($titulo, $autor, $anio, $genero, $id = null) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anio = $anio;
        $this->genero = $genero;
    }

    public static function getAll() {
        $conn = Database::connect();
        $stmt = $conn->prepare("SELECT * FROM biblioteca");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id) {
        $conn = Database::connect();
        $stmt = $conn->prepare("SELECT * FROM biblioteca WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function delete($id) {
        $conn = Database::connect();
        $stmt = $conn->prepare("DELETE FROM biblioteca WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function save() {
        $conn = Database::connect();
        if ($this->id) {
            $stmt = $conn->prepare("UPDATE biblioteca SET titulo = ?, autor = ?, año = ?, genero = ? WHERE id = ?");
            return $stmt->execute([$this->titulo, $this->autor, $this->anio, $this->genero, $this->id]);
        } else {
            $stmt = $conn->prepare("INSERT INTO biblioteca (titulo, autor, año, genero) VALUES (?, ?, ?, ?)");
            return $stmt->execute([$this->titulo, $this->autor, $this->anio, $this->genero]);
        }
    }
}

?>