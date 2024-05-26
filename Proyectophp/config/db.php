<?php
//Conexión a la base de datos utilizando MySQLi /
class Database{
    public static function connect(){
        $db = new mysqli('localhost', 'root', '', 'tienda_sakura');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}