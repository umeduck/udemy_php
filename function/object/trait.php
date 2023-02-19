<?php

trait ProductTrait{
  public function getProduct() {
    echo 'プロダクト';
  }
}


trait NetTrait{
  public function getNews() {
    echo 'ニュース';
  }
}

class Product{
  use ProductTrait;
  use NetTrait;
  public function getInformation() {
    echo 'クラスです';
  }
}

$product = new Product();
$product->getProduct();echo '<br>';
$product->getNews();echo '<br>';
$product->getInformation();
