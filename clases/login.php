<?php 
class login {
 private $id_login;
 private $correo ;
 private $contraseña; 
 
 public function _construct($id_login = null, $correo = "", $contraseña = "") {
    $this->id_login = $id_login;
    $this->correo = $correo; 
    $this->contraseña = $contraseña;
 }
 
 public function get_id_login(){
    return $this-> id_login;
 }

 public function set_id_login($id_login){
    $this->id_login= $id_login;
 }

  public function get_correo(){
    return $this-> correo;
 }

 public function set_correo($correo){
    $this->correo= $correo;
 }

  public function get_contraseña(){
    return $this-> contraseña;
 }

 public function set_contraseña($contraseña){
    $this->contraseña= $contraseña;
 }

}
?>