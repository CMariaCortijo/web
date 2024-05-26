<!--REPRESENTA A LA TABLA CATEGORÍA-->

<?php

class Categoria{
	private $id;
	private $nombre;
	private $db;
	
    //constructor llamada BD
	public function __construct() {
		$this->db = Database::connect();
	}
// Getter & Setters para obtener & asignar valores a los objetos
function getId() {
    return $this->id;
}

function getNombre() {
    return $this->nombre;
}

function setId($id) {
    $this->id = $id;
}
// No tener error de comillas etc
function setNombre($nombre) {
    $this->nombre = $this->db->real_escape_string($nombre);
}
//Todas las filas categorias en descendente
public function getAll(){
    $categorias = $this->db->query("SELECT * FROM categorias ORDER BY id DESC");
    return $categorias;
}
//Obtenemos una fila  con un id especidifico
public function getOne(){
    $categoria = $this->db->query("SELECT * FROM categorias WHERE id={$this->getId()}");
    return $categoria->fetch_object();
}

//inserta una nueva categoria en la BD
public function save(){

    $sql = "INSERT INTO categorias VALUES(NULL, '{$this->getNombre()}');";

    //Ejecutamos consulta
    $save = $this->db->query($sql);
    
    $result = false;
    if($save){
        $result = true;
    }
    return $result;
}
}
?>