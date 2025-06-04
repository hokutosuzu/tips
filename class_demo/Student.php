<?php

/**
 * Personクラスを継承したStudentクラス
 * 継承とメソッドのオーバーライドを学習するためのクラス
 */
require_once 'Person.php';

class Student extends Person
{
  /**
   * 学生番号を格納するプライベートプロパティ
   * @var string
   */
  private $studentId;

  /**
   * 専攻を格納するプライベートプロパティ
   * @var string
   */
  private $major;

  /**
   * コンストラクタのオーバーライド
   *
   * @param string $name 名前
   * @param int $age 年齢
   * @param string $studentId 学生番号
   * @param string $major 専攻
   */
  public function __construct($name, $age, $studentId, $major)
  {
    // 親クラスのコンストラクタを呼び出す
    parent::__construct($name, $age);

    $this->studentId = $studentId;
    $this->major = $major;
  }

  /**
   * 学生番号を取得するゲッターメソッド
   *
   * @return string 学生番号
   */
  public function getStudentId()
  {
    return $this->studentId;
  }

  /**
   * 専攻を取得するゲッターメソッド
   *
   * @return string 専攻
   */
  public function getMajor()
  {
    return $this->major;
  }

  /**
   * 自己紹介メソッドのオーバーライド
   * 親クラスの機能を拡張して、学生固有の情報を追加
   *
   * @return string 拡張された自己紹介文
   */
  public function introduce()
  {
    // 親クラスのメソッドを利用しつつ拡張
    $introduction = parent::introduce();
    return $introduction . " 学生番号は{$this->studentId}で、専攻は{$this->major}です。";
  }
}
