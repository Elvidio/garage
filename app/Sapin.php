<?php


namespace App;

class Fir implements Article
{
  protected string $firname;

  public function __construct(string $firname)
  {
    $this->firname = $firname;

  }

  public function givePrice(): float
  {
    return 5;
  }

  public function giveName(): string
  {
    return $this->name;
  }
}
