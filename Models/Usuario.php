<?php
Class Usuario{
    private $conn;
    private $table = "usuarios";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function verificar($usuario, $clave) {
        $query = "SELECT * FROM $this->table WHERE nombre_usuario = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$usuario]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row && password_verify($clave, $row['contraseña']);
    }
    
        public function insertar($usuario, $clave) {
        $stmt = $this->conn->prepare("INSERT INTO usuarios (nombre_usuario, contraseña) VALUES (?, ?)");
        return $stmt->execute([$usuario, $clave]);
    }
}
  //private $id;
    //private $nombre_usuario;
    //private $contraseña;

    //public function __construct($id = null, $nombre_usuario, $contraseña) {
    //    $this->id = $id;
    //    $this->nombre_usuario = $nombre_usuario;
    //    $this->contraseña = $contraseña;
    //}

    //public static function listar(){
    //    $conn = Database::connect();
    //    $stmt = $conn->prepare("SELECT * FROM usuarios");
    //    $stmt->execute();
    //    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    //}

    //public function guardar(){
    //    $conn = Database::connect();
    //    if($this->id){
    //        $stmt = $conn->prepare("UPDATE usuarios SET nombre_usuario = ?, contraseña = ? WHERE id = ?");
    //        return $stmt->execute([$this->nombre_usuario, $this->contraseña, $this->id]);
    //    } else {
    //        $stmt = $conn->prepare("INSERT INTO usuarios (nombre_usuario, contraseña) VALUES (?, ?)");
    //        return $stmt->execute([$this->nombre_usuario, $this->contraseña]);
    //    }
    //}

    /*public static function obtenerId($id){
        $conn = Database::connect();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public static function eliminar($id){
        $conn = Database::connect();
        $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = ?");
        return $stmt->execute([$id]);
    }*/
?>