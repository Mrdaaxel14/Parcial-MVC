<?php
class Database{
    private static $conn;
    public static function connect(){
        return self::$conn = new PDO('mysql:host=localhost;dbname=db_biblioteca', 'root', '');
    }
}
?>