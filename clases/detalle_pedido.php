<?php 
class detalle_pedido {
 private $id_detalle;
 private $id_pedido ;
 private $id_producto; 
 private $id_pedido_personalizado;
 private $cantidad;
 private $precio_unitario;
 private $subtotal;
 private $notas;
 
 public function _construct($id_detalle = null, $id_pedido = null, $id_producto = null, 
 $id_pedido_personalizado= null, $cantidad = "", $precio_unitario="",
 $subtotal = "", $notas = "") {
    $this->id_detalle = $id_detalle;
    $this->id_pedido = $id_pedido;
    $this->id_producto = $id_producto; 
    $this->id_pedido = $id_pedido_personalizado;
    $this->cantidad = $cantidad;
    $this->precio_unitario = $precio_unitario;
    $this->subtotal = $subtotal;
    $this-> notas = $notas;
 }

  public function get_id_detalle(){
    return $this-> id_detalle;
 }

 public function set_id_detalle($id_detalle){
    $this->id_detalle = $id_detalle;
 }

 
 public function get_id_pedido (){
    return $this-> id_pedido;
 }

 public function set_id_pedido($id_pedido){
    $this-> id_pedido = $id_pedido;
 }

  public function get_id_producto(){
    return $this-> id_producto;
 }

 public function set_id_producto($id_producto){
    $this-> id_producto = $id_producto;
 }

  public function get_id_pedido_personalizado(){
    return $this-> id_pedido_personalizado;
 }

 public function set_id_pedido_personalizado($id_pedido_personalizado){
    $this->id_pedido_personalizado =  $id_pedido_personalizado;
 }

  public function get_cantidad(){
    return $this-> cantidad;
 }

 public function set_cantidad($cantidad){
    $this->cantidad =  $cantidad;
 }

  public function get_precio_unitario(){
    return $this-> precio_unitario;
 }

 public function set_precio_unitario($precio_unitario){
    $this->precio_unitario =  $precio_unitario;
 }

  public function get_subtotal(){
    return $this->subtotal;
 }

 public function set_subtotal($subtoal){
    $this->subtotal =  $subtoal;
 }

  public function get_notas(){
    return $this->notas;
 }

 public function set_notas($notas){
    $this->notas =  $notas;
 }
}
?>