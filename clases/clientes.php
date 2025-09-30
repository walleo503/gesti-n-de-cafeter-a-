<?php 
class clientes {
 private $id_cliente;
 private $id_login ;
 private $nombre; 
 private $apellido;
 private $correo;
 private $telefono; 
 private $fecha_registro; 

 public function _construct($id_cliente = null, $id_login = null, $nombre = "", 
 $apellido = "", $correo = "", $telefono = "", $fecha_registro="") {
    $this->id_cliente = $id_cliente;
    $this->id_login = $id_login;
    $this->nombre = $nombre; 
    $this->apellido= $apellido;
    $this->correo = $correo;
    $this->telefono =$telefono;
    $this->fecha_registro=$fecha_registro;
 }

  public function get_id_cliente(){
    return $this-> id_cliente;
 }

 public function set_id_usuario($id_cliente){
    $this->id_cliente= $id_cliente;
 }

 
 public function get_id_login(){
    return $this-> id_login;
 }

 public function set_id_login($id_login){
    $this->id_login= $id_login;
 }

  public function get_nombre(){
    return $this-> nombre;
 }

 public function set_nombre($nombre){
    $this->nombre= $nombre;
 }

  public function get_apellido(){
    return $this-> apellido;
 }

 public function set_apellido($apellido){
    $this->apellido= $apellido;
 }

   public function get_correo(){
    return $this-> correo;
 }

 public function set_correo($correo){
    $this->correo= $correo;
 }

   public function get_telefono(){
    return $this-> telefono;
 }

 public function set_telefono($telefono){
    $this->telefono= $telefono;
 }

   public function get_fecha_registro(){
    return $this-> fecha_registro;
 }

 public function set_fecha_registro($fecha_registro){
    $this->fecha_registro = $fecha_registro;
 }

}
?>