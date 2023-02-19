<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

// インターフェース
interface ProductInterface{
  public function getName();
}
 
// インターフェース
interface NewsInterface{
  public function getNews();
}

// 子クラス
class Bird implements ProductInterface, NewsInterface {
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
  public function getNews(){
    echo 'ニュースです';
  }
}

$bird = new Bird('だいふく');

//親クラスのメソッド
// $bird->echoProduct();

$bird->getName();
echo '<br>';
$bird->addText();
$bird->getText();
echo '<br>';
// $bird->getNews();
// echo '<br>';
$int = Bird::addInt(9,1478);
echo $int;


// class Sample{
//   public function getWeather(){
//     echo "明日は晴れ";
//   }
//   public static function getNews(){
//       echo 'コロナが流行しました';
//   }
// }
// $sample = new Sample();
// $sample->getWeather();
// Sample::getNews();


// オーバーライド
// 親クラスと子クラスに同じメソッド名があった際子クラスからそのメソッドが呼び出せれるとこうラスのメソッドを優先される

//抽象クラス
// abstractクラスのに入っているabstractメソッドは子クラスが必ず同じメソッド名を使用しなくてはいけない決まりがある

