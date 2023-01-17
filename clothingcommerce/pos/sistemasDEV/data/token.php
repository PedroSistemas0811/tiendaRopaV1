<?php
class Acceso
{
    public $_token;
    public $_usuario;
 
    public function __construct()
    {
        $this->_token = "vxgxkmgfdkmgfdlkmgfdlkmgfd";
        $this->_usuario = "Pedro";
    }
 
    public function gettoken()
    {
        return $this->_token;
    }
     public function settoken($token)
    {
        $this->_token = $token;
    }
 
    public function getUsuario()
    {
        return $this->_usuario;
    }
 
    public function setUsuario($usuario)
    {
        $this->_usuario = $usuario;
    }
}
 


?>