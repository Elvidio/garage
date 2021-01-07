<?php

namespace App;

Use DateTime;

class Voiture extends vehicule
{
    public int $kmCount;
    private DateTime $constructionYear;


    public function __construct(int $kmCount, DateTime $constructionYear)
    {
        $this->kmCount = $kmCount;
        $this->constructionYear = $constructionYear;
        $this->prix = $prix;
    }

    public function usury(): int
    {
      return $this->kmCount * $this->constructionYear;
    }

    public function popularity(): int
    {
      if ($this->constructionYear > 2010) {

        return popularity() ="popularité bonne";

      } else {

        return popularity() ="popularité mauvaise";

      }
    }

    public function tarif(): vehicule
    {
      return $this->price / usury();
    }

    public function denomination(): vehicule
    {
      return $this->marque." ".$this->$name;
    }
}
