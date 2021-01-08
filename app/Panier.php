<?php


namespace App;

use Exception;

class Panier
{
  protected array $bill;

  public function __construct(array $bill)
  {
    $this->bill = $bill
    foreach ($bill as $bill) {
      if (! $bill instanceof Arcticle) {
                throw new Exception("Le panier prends seulement les articles en compte");
      }
    }
  }

  public function getArticle(): array
	{
		$totalPrice = 0;
		$totalArticles= '';
		foreach ($this->bill as $bill){
			$totalPrice += $bill->getPrice();
			$totalArticles = $totalArticles.', '.$bill->getName();
		}
		return [$totalArticles, $totalPrice];
	}

}
