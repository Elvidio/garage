<?php

namespace App;

class Utilitaire Extends vehicule
{
    public int $kmCount;
    public int $volume;

    public function __construct(string $kmCount, int $volume)
    {
      $this->kmCount = $kmCount;
      $this->volume = $volume;
    }

    public function popularity(): int
    {
      if ($this->volume > 11) {

        return popularity() ="popularité bonne";

      } else {

        return popularity() ="popularité mauvaise";

      }
    }

    public function prix(): vehicule
    {
      return $this->price = $price + ($volume*10)
    }

    public function denomination(): vehicule
    {
      return $this->marque." ".$this->$name;
    }
}
