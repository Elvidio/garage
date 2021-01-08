<?php

namespace App;

class Utilitaire Extends Vehicle implements Article
{
    private int $kmCount;
    private int $volume;

    public function __construct(int $kmCount, int $volume, string $name, int $price, string $marque, int $constructionYear)
    {
      parent:: __construct($brandname, $name, $price);
      $this->kmCount = $kmCount;
      $this->volume = $volume;
    }

    public function popularity(): string
    {
      if ($this->volume > 11) {

        return popularity() ="popularité bonne";

      } else {

        return popularity() ="popularité mauvaise";

      }
    }

    public function givePrice(): float
    {
      return $this->price = $this->price + ($this->volume*10);
      return $this->price;
    }

    public function giveName(): string
    {
      return $this->brandname." ".$this->name;
    }
}
