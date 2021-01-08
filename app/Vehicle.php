<?php

namespace App;

abstract class Vehicle
{

  protected string $name;
  protected int $price;

  public function __construct(string $name, int $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  abstract public function popularity(): String;

}
