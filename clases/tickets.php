<?php 
class tickets {
 private $id_ticket;
 private $id_pedido ;
 private $numero_ticket; 
 private $subtotal;
 private $total;
 private $metodo_pago;
 private $fecha_emision;
 

 public function _construct($id_ticket = null, $id_pedido= null, $numero_ticket = "", 
 $subtotal = "", $total= "", $metodo_pago ="", $fecha_emision = "") {
    $this->id_ticket = $id_ticket;
    $this->id_pedido = $id_pedido;
    $this->numero_ticket = $numero_ticket; 
    $this->subtotal = $subtotal;
    $this -> total = $total;
    $this -> metodo_pago =$metodo_pago;
    $this-> fecha_emision = $fecha_emision;
 }

  
 public function get_id_ticket (){
    return $this-> id_ticket;
 }

 public function set_id_ticket($id_ticket){
    $this->id_ticket= $id_ticket;
 }

  public function get_id_pedido(){
    return $this-> id_pedido;
 }

 public function set_id_pedido($id_pedido){
    $this->id_pedido= $id_pedido;
 }

  public function get_numero_ticket(){
    return $this-> numero_ticket;
 }

 public function set_numero_ticket($numero_ticket){
    $this->numero_ticket = $numero_ticket;
 }

  public function get_subtotal(){
    return $this-> subtotal;
 }

 public function set_subtotal($subtotal){
    $this->subtotal = $subtotal;
 }

  public function get_metodo_pago(){
    return $this-> metodo_pago;
 }

 public function set_metodo_pago($metodo_pago){
    $this->metodo_pago = $metodo_pago;
 }

  public function get_fecha_emision (){
    return $this-> fecha_emision;
 }

 public function set_fecha_emision($fecha_emision){
    $this->fecha_emision = $fecha_emision;
 }
}
?>