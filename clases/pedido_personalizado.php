<?php 
class pedido_personalizado {
 private $id_pedido_personalizado;
 private $id_pedido ;
 private $producto; 
 private $tipo;
 private $cantidad;
 private $descripcion; 
 private $estado_pago; 
 private $sub_total; 
 private $deposito;
 private $total;

 public function _construct($id_pedido_personalizado = null, $id_pedido = null, 
 $producto= "",  $tipo = "", $cantidad = "", $descripcion = "", $estado_pago="", 
 $sub_total ="", $deposito = "", $total = "") {
    $this->id_pedido_personalizado = $id_pedido_personalizado;
    $this->id_pedido = $id_pedido;
    $this->tipo = $producto; 
    $this->cantidad= $cantidad;
    $this->descripcion = $descripcion;
    $this->estado_pago =$estado_pago;
    $this->sub_total=$sub_total;
    $this->deposito = $deposito;
    $this->total =$total;
 }

  public function get_id_pedido_personalizado(){
    return $this-> id_pedido_personalizado;
 }

 public function set_id_pedido_personalizado($id_pedido_personalizado){
    $this->id_pedido_personalizado= $id_pedido_personalizado;
 }

 
 public function get_id_pedido(){
    return $this-> id_pedido;
 }

 public function set_id_pedido($id_pedido){
    $this->id_pedido= $id_pedido;
 }

  public function get_producto(){
    return $this-> producto;
 }

 public function set_producto($producto){
    $this->producto = $producto;
 }

  public function get_tipo(){
    return $this-> tipo;
 }

 public function set_tipo($tipo){
    $this->tipo = $tipo;
 }

   public function get_cantidad(){
    return $this-> cantidad;
 }

 public function set_cantidad($cantidad){
    $this->cantidad = $cantidad;
 }

   public function get_descripcion(){
    return $this-> descripcion;
 }

 public function set_descripcion($descripcion){
    $this->descripcion = $descripcion;
 }

   public function get_estado_pago(){
    return $this-> estado_pago;
 }

 public function set_estado_pago($estado_pago){
    $this-> estado_pago = $estado_pago;
 }

   public function get_sub_total(){
    return $this-> sub_total;
 }

 public function set_sub_total($sub_total){
    $this-> sub_total = $sub_total;
 }

   public function get_deposito(){
    return $this-> deposito;
 }

 public function set_deposito($deposito){
    $this-> deposito = $deposito;
 }
 
   public function get_total(){
    return $this-> total;
 }

 public function set_total($total){
    $this-> total = $total;
 }
}
?>