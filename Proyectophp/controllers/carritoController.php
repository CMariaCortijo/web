<?php
require_once 'models/producto.php';

class carritoController{
	
	//Verificación de la sesion carrito con al menos 1 elemento

	public function index(){
		if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1){
			//añade el contenido
			$carrito = $_SESSION['carrito'];
		}else{
			//genera un array vacio
			$carrito = array();
		}
		require_once 'views/carrito/index.php';
	}

	//Añadir al carrito -> aquí apuntan los métodos

	public function add(){
		//Si la variable esta definida se le da el valor a $producto_id
		if(isset($_GET['id'])){
			$producto_id = $_GET['id'];
			//Sino lanza la usuario a la web inicial
		}else{
			header('Location:'.base_url);
		}
		//Aumento de las unidades
		if(isset($_SESSION['carrito'])){
			//contador a 0
			$counter = 0;
			//Si la sesion es encontrada 
			foreach($_SESSION['carrito'] as $indice => $elemento){
				if($elemento['id_producto'] == $producto_id){
					$_SESSION['carrito'][$indice]['unidades']++;
					$counter++;
				}
			}	
		}
		//En caso de que counter no exista o sea = 0
		if(!isset($counter) || $counter == 0){
			// Conseguir producto
			$producto = new Producto();
			//Seleccionamos en la tabla el producto
			$producto->setId($producto_id);
			//Sacamos ese producto
			$producto = $producto->getOne();

			// Añadir productos al carrito
			if(is_object($producto)){
				$_SESSION['carrito'][] = array(
					"id_producto" => $producto->id,
					"precio" => $producto->precio,
					"unidades" => 1,
					"producto" => $producto
				);
			}
		}
		
		header("Location:".base_url."carrito/index");
	}
	
	public function delete(){
		if(isset($_GET['index'])){
			//Variable qie recoge el parametro index enviado a traves URL
			$index = $_GET['index'];
			//Elimina del carrito el producto seleccionado
			unset($_SESSION['carrito'][$index]);
		}
		header("Location:".base_url."carrito/index");
	}
	
	public function up(){
		if(isset($_GET['index'])){
			$index = $_GET['index'];
			//aumento de unidades
			$_SESSION['carrito'][$index]['unidades']++;
		}
		header("Location:".base_url."carrito/index");
	}
	
	public function down(){
		if(isset($_GET['index'])){
			$index = $_GET['index'];
			//decremento unidades
			$_SESSION['carrito'][$index]['unidades']--;
			//El item se elimina si no tiene unidades
			if($_SESSION['carrito'][$index]['unidades'] == 0){
				unset($_SESSION['carrito'][$index]);
			}
		}
		header("Location:".base_url."carrito/index");
	}
	
	public function delete_all(){
		//Elimina todo del carrito
		unset($_SESSION['carrito']);
		header("Location:".base_url."carrito/index");
	}
	
}