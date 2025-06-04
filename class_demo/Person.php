<?php
// 基本的なクラスの定義
class Person
{
  // プロパティ（クラスの変数）
  private $name;
  private $age;

  // コンストラクタ（クラスがインスタンス化されるときに実行される）
  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  // メソッド（クラスの関数）
  public function getName()
  {
    return $this->name;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function setAge($age)
  {
    $this->age = $age;
  }

  // クラスメソッド
  public function introduce()
  {
    return "こんにちは、私の名前は{$this->name}です。{$this->age}歳です。";
  }
}
