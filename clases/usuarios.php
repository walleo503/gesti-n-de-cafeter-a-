<?php 
class usuarios {
 private $id_usuario;
 private $id_login ;
 private $nombre; 
 private $rol;
 private $fecha_registro;
 private $estado; 
 

 public function _construct($id_usuario = null, $id_login = null, $nombre = "", 
 $rol = "", $fecha_registro = "", $estado = "") {
    $this->id_usuario = $id_usuario;
    $this->id_login = $id_login;
    $this->nombre = $nombre; 
    $this->rol = $rol;
    $this-> fecha_registro = $fecha_registro;
    $this->estado=$estado;
 }

  public function get_id_usuario(){
    return $this-> id_usuario;
 }

 public function set_id_usuario($id_usuario){
    $this->id_usuario= $id_usuario;
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

 public function set_correo($nombre){
    $this->nombre= $nombre;
 }

  public function get_rol(){
    return $this-> rol;
 }

 public function set_rol($rol){
    $this->rol= $rol;
 }

   public function getfecha_registro(){
    return $this-> fecha_registro;
 }

 public function setfecha_resgistro($fecha_registro){
    $this->fecha_registro= $fecha_registro;
 }

   public function get_estado(){
    return $this-> rol;
 }

 public function set_estado($rol){
    $this->rol= $rol;
 }

}
?>