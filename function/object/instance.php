<?php

class Bird{
  //アクセス修飾子、private(外からはアクセスできない)、protected(自分のクラス・継承したクラスのみ使用できる)、public(外からアクセスできる(default))

  //変数
  private $name = [];
  private $text = [];
  //メソッド
  function __construct($name){
    $this->name = $name;
  }

  public function getName(){
    echo $this->name;
  }

  public function addText(){
    $this->text = '僕は'.$this->name.'です';
  }

  public function getText(){
    echo $this->text;
  }

  public static function addInt($a, $b){
    return $a+$b;
  }
}

$bird = new Bird('だいふく');

$bird->getName();
$bird->addText();
$bird->getText();

$int = Bird::addInt(9,1478);
echo $int;


class Sample{
  public function getWeather(){
    echo "明日は晴れ";
  }
  public static function getNews(){
      echo 'コロナが流行しました';
  }
}
$sample = new Sample();
$sample->getWeather();
Sample::getNews();

