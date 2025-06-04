<?php

/**
 * 基本的なクラスの定義
 * Personクラス - オブジェクト指向プログラミングの基本概念を学習するためのクラス
 */
class Person
{
  /**
   * 名前を格納するプライベートプロパティ
   * @var string
   */
  private $name;

  /**
   * 年齢を格納するプライベートプロパティ
   * @var int
   */
  private $age;

  /**
   * コンストラクタ（クラスがインスタンス化されるときに実行される）
   *
   * @param string $name 名前
   * @param int $age 年齢
   */
  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  /**
   * 名前を取得するゲッターメソッド
   *
   * @return string 名前
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * 年齢を取得するゲッターメソッド
   *
   * @return int 年齢
   */
  public function getAge()
  {
    return $this->age;
  }

  /**
   * 名前を設定するセッターメソッド
   *
   * @param string $name 新しい名前
   */
  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * 年齢を設定するセッターメソッド
   *
   * @param int $age 新しい年齢
   */
  public function setAge($age)
  {
    $this->age = $age;
  }

  /**
   * 自己紹介メソッド
   *
   * @return string 自己紹介文
   */
  public function introduce()
  {
    return "こんにちは、私の名前は{$this->name}です。{$this->age}歳です。";
  }
}
