<?php

namespace App;

interface Article
{
  public function givePrice(): float;
  
  public function giveName(): string;

}
