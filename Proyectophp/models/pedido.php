<!--TABLA PEDIDOS-->
<?php

class Pedido{
	private $id;
	private $nombre;
	private $usuario_id;
	private $provincia;
	private $localidad;
	private $direccion;
	private $coste;
	private $estado;
	private $fecha;
	private $hora;

	private $db;
	
	public function __construct() {
		$this->db = Database::connect();
	}
	function getNombre() {
		return $this->nombre;
	}

	function getId() {
		return $this->id;
	}

	function getUsuario_id() {
		return $this->usuario_id;
	}

	function getProvincia() {
		return $this->provincia;
	}

	function getLocalidad() {
		return $this->localidad;
	}

	function getDireccion() {
		return $this->direccion;
	}

	function getCoste() {
		return $this->coste;
	}

	function getEstado() {
		return $this->estado;
	}

	function getFecha() {
		return $this->fecha;
	}

	function getHora() {
		return $this->hora;
	}

	function setId($id) {
		$this->id = $id;
	}

	function setUsuario_id($usuario_id) {
		$this->usuario_id = $usuario_id;
	}
// escapamos los caracteres especiales para prevenir una inyeccion SQL de código malicioso
	function setNombre($nombre) {
	$this->nombre = $this->db->real_escape_string($nombre);
}

	function setProvincia($provincia) {
		$this->provincia = $this->db->real_escape_string($provincia);
	}

	function setLocalidad($localidad) {
		$this->localidad = $this->db->real_escape_string($localidad);
	}

	function setDireccion($direccion) {
		$this->direccion = $this->db->real_escape_string($direccion);
	}

	function setCoste($coste) {
		$this->coste = $coste;
	}

	function setEstado($estado) {
		$this->estado = $estado;
	}

	function setFecha($fecha) {
		$this->fecha = $fecha;
	}

	function setHora($hora) {
		$this->hora = $hora;
	}

	public function getAll(){
		$productos = $this->db->query("SELECT * FROM pedidos ORDER BY id DESC");
		return $productos;
	}
	
	public function getOne(){
		$producto = $this->db->query("SELECT * FROM pedidos WHERE id = {$this->getId()}");
		return $producto->fetch_object();
	}
	// busca uun pedido en la BD  de un usuario_id, se selecciona el id y el coste y se ordna por ID descendente
	public function getOneByUser(){
		$sql = "SELECT p.id, p.coste FROM pedidos p "
				. "WHERE p.usuario_id = {$this->getUsuario_id()} ORDER BY id DESC LIMIT 1";
			//devuelve datos obtenidos consulta
		$pedido = $this->db->query($sql);
			//devuelve el pedido realizado como objeto
		return $pedido->fetch_object();
	}
	
	//recuperar los pedidos realizados por un usuario_id
	public function getAllByUser(){
		$sql = "SELECT p.* FROM pedidos p "
				. "WHERE p.usuario_id = {$this->getUsuario_id()} ORDER BY id DESC";
			
		$pedido = $this->db->query($sql);
			
		return $pedido;
	}
	
	
	public function getProductosByPedido($id){
//		$sql = "SELECT * FROM productos WHERE id IN "
//				. "(SELECT producto_id FROM lineas_pedidos WHERE pedido_id={$id})";
	
//obtenemos los registros de la tabla productos asociados al pedido con el identificador $id y cantidades de ese producto
		$sql = "SELECT pr.*, lp.unidades FROM productos pr "
				. "INNER JOIN lineas_pedidos1 lp ON pr.id = lp.producto_id "
				. "WHERE lp.pedido_id={$id}";
				
		$productos = $this->db->query($sql);
			
		return $productos;
	}
	
	//guarda en la BD el pedido y devuelve true o false
	public function save(){
		$sql = "INSERT INTO pedidos VALUES(NULL, {$this->getUsuario_id()}, '{$this->getProvincia()}', '{$this->getNombre()}', '{$this->getLocalidad()}', '{$this->getDireccion()}', {$this->getCoste()}, 'confirm', CURDATE(), CURTIME());";		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
	//Guarda todas las líneas del carrito en la BD
	public function save_linea(){
		//obtenemos el ultimo id insertado en pedidos y se almacena en $pedido
		$sql = "SELECT LAST_INSERT_ID() as 'pedido';";
		$query = $this->db->query($sql);
		$pedido_id = $query->fetch_object()->pedido;
		// recorremos la sesion para obtener el producto y las unidades
		foreach($_SESSION['carrito'] as $elemento){
			$producto = $elemento['producto'];
			
			$insert = "INSERT INTO lineas_pedidos1 VALUES(NULL, {$pedido_id}, {$producto->id}, {$elemento['unidades']})";
			$save = $this->db->query($insert);
			
//			var_dump($producto);
//			var_dump($insert);
//			echo $this->db->error;
//			die();
		}
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
	
	// actualizacion del pedido en la BD mediante el estadoy el id pedido
	public function edit(){
		$sql = "UPDATE pedidos SET estado='{$this->getEstado()}' ";
		$sql .= " WHERE id={$this->getId()};";
		
		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
}