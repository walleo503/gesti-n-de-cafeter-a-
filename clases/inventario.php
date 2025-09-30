<?php 
class detalle_pedido {
 private $id_inventario;
 private $id_producto ;
 private $cantidad; 
 private $tipo_movimiento;
 private $fecha_movimiento;
private $descripcion;
 
 public function _construct($id_inventario = null, $id_producto = null, $cantidad = "", 
 $tipo_movimiento= null, $fecha_movimiento = "", $descripcion="",) {
    $this->id_detalle = $id_inventario;
    $this->id_pedido = $id_producto;
    $this->id_producto = $cantidad; 
    $this->id_pedido = $tipo_movimiento;
    $this->cantidad = $fecha_movimiento;
    $this->precio_unitario = $descripcion;
 }

  public function get_id_inventario(){
    return $this-> id_inventario;
 }

 public function set_id_inventario($id_inventario){
    $this->id_inventario = $id_inventario;
 }

  public function get_id_producto(){
    return $this-> id_producto;
 }

 public function set_id_producto($id_producto){
    $this-> id_producto = $id_producto;
 }

  public function get_cantidad(){
    return $this-> cantidad;
 }

 public function set_cantidad($cantidad){
    $this->cantidad =  $cantidad;
 }

  public function get_tipo_movimiento(){
    return $this-> tipo_movimiento;
 }

 public function set_tipo_movimiento($tipo_movimiento){
    $this->tipo_movimiento =  $tipo_movimiento;
 }

  public function get_fecha_movimiento(){
    return $this-> fecha_movimiento;
 }

 public function set_fecha_movimiento($fecha_movimiento){
    $this->fecha_movimiento =  $fecha_movimiento;
 }

  public function get_descripcion(){
    return $this->descripcion;
 }

 public function set_descripcion($descripcion){
    $this->descripcion =  $descripcion;
 }
}
?>