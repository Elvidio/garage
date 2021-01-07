<?php

namespace App;

abstract class vehicle {
  public string $name;
  public int $price;

  public function __construct(string $name, int $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  abstract public function popularity(): vehicule;

}
