<?php

namespace App;

class Voiture extends Vehicle implements Article
{
    protected int $kmCount;
    protected int $constructionYear;

    public function __construct(int $kmCount, string $name, int $price, int $constructionYear, string $brandname)
    {
        parent::__construct($name, $brandname, $price);
        $this->kmCount = $kmCount;
        $this->constructionYear = $constructionYear;

    }

    public function usury(): int
    {
      return $this->kmCount * $this->constructionYear;
    }

    public function popularity(): string
    {
      if ($this->constructionYear > 2010) {

        return "popularité bonne";

      } else {

        return "popularité mauvaise";

      }
    }

    public function givePrice(): float
    {
      return $this->price / $this->usury();
    }

    public function giveName(): string
    {
      return $this->brandname." ".$this->name;
    }
}
