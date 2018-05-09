<?php

/**
 * esta es la clase souvenir, me servira para guardar  en mi base de datos
 */
class Souvenir
{
  var $name;
  var $price;
  var $description;

  function __construct($name , $price , $description)
  {
    $this->name = $name;
    $this->price = $price;
    $this->description = $description;
  }
  public function show_data()
  {
    echo $this->name;
    echo $this->price;
    echo $this->description;
  }
}

?>
