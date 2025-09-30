<?php 
class pedidos {
 private $id_pedido;
 private $id_cliente ;
 private $fecha; 
 private $estado;
 

 public function _construct($id_pedido = null, $id_cliente= null, $fecha = "", 
 $estado = "") {
    $this->id_pedido = $id_pedido;
    $this->id_cliente = $id_cliente;
    $this->fecha = $fecha; 
    $this->estado= $estado;
 }

  public function get_id_pedido(){
    return $this-> id_pedido;
 }

 public function set_id_pedido($id_pedido){
    $this->id_pedido= $id_pedido;
 }

 
 public function get_id_cliente (){
    return $this-> id_cliente;
 }

 public function set_id_cliente($id_cliente){
    $this->id_cliente= $id_cliente;
 }

  public function get_fecha(){
    return $this-> fecha;
 }

 public function set_fecha($fecha){
    $this->fecha= $fecha;
 }

  public function get_estado(){
    return $this-> estado;
 }

 public function set_estado($estado){
    $this->estado= $estado;
 }

}
?>