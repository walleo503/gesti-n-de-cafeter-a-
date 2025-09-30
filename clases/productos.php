<?php 
class productos {
 private $id_producto;
 private $nombre ;
 private $precio; 
 private $categoria;
 private $stock;
 private $estado;
 
 public function _construct($id_producto = null, $nombre = "", $precio = "", 
 $categoria= "", $stock = "", $estado = "") {
    $this->id_producto = $id_producto;
    $this->nombre = $nombre;
    $this->precio = $precio; 
    $this->categoria = $categoria;
    $this->stock = $stock;
    $this->estado = $estado;
 }

  public function get_id_productos(){
    return $this-> id_producto;
 }

 public function set_id_producto($id_producto){
    $this->id_producto= $id_producto;
 }

 
 public function get_nombre (){
    return $this-> nombre;
 }

 public function set_nombre($nombre){
    $this-> nombre= $nombre;
 }

  public function get_precio(){
    return $this-> precio;
 }

 public function set_precio($precio){
    $this->precio = $precio;
 }

  public function get_categoria(){
    return $this-> categoria;
 }

 public function set_categoria($categoria){
    $this->categoria =  $categoria;
 }

  public function get_stock(){
    return $this-> stock;
 }

 public function set_stock($stock){
    $this->stock =  $stock;
 }

  public function get_estado(){
    return $this-> estado;
 }

 public function set_estado($estado){
    $this->estado =  $estado;
 }
 
}
?>