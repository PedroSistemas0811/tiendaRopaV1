<?php
class Venta
{
  public $claveArticulo;
  public $descripcionArticulo;
  public $articuloPrecio;
  public $articuloIva;
  public $articuloCantidad;
  public $articuloFecha;
  public $articuloUsuario;

  public function __construct($claveArticulo, $descripcionArticulo, $articuloPrecio,$articuloIva,$articuloCantidad,
                            $fecha,$usuario)
  {
    $this->claveArticulo = $claveArticulo;
    $this->descripcionArticulo = $descripcionArticulo;
    $this->articuloPrecio = $articuloPrecio;
    $this->articuloIva= $articuloIva;
    $this->articuloCantidad = $articuloCantidad;
    $this->articuloFecha = $articuloFecha;
    $this->articuloUsuario = $articuloUsuario;
    
  }
 
  public function getclaveArticulo()
  {
    return $this->claveArticulo;
  }
  
  public function setclaveArticulo( $claveArticulo ) {
            $this->claveArticulo = $claveArticulo;
  }
  
  
  public function getdescripcionArticulo()
  {
    return $this->descripcionArticulo;
  }
  public function setdescripcionArticulo( $descripcionArticulo ) {
            $this->descripcionArticulo = $descripcionArticulo;
  }
  
  
  public function getarticuloPrecio()
  {
    return $this->articuloPrecio;
  }
  public function setarticuloPrecio( $articuloPrecio ) {
            $this->articuloPrecio= $articuloPrecio;
  }
  
  
  public function getarticuloIva()
  {
    return $this->articuloIva;
  }
  public function setarticuloIva( $articuloIva ) {
            $this->articuloIva = $articuloIva;
  }
  
  public function getarticuloCantidad()
  {
    return $this->articuloCantidad;
  }
  public function setarticuloCantidad( $articuloCantidad ) {
            $this->articuloCantidad = $articuloCantidad;
  }
  
  public function getarticuloFecha()
  {
    return $this->articuloFecha;
  }
  public function setarticuloFecha( $articuloFecha ) {
            $this->articuloFecha = $articuloFecha;
  }
  
  
  public function getarticuloUsuarioa()
  {
    return $this->articuloUsuario;
  }
  public function setarticuloUsuario( $articuloUsuario ) {
            $this->articuloUsuario = $articuloUsuario;
  }

}
?>