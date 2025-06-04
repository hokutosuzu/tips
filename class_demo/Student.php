<?php
// Personクラスを継承したStudentクラス
require_once 'Person.php';

class Student extends Person
{
  // 追加のプロパティ
  private $studentId;
  private $major;

  // コンストラクタのオーバーライド
  public function __construct($name, $age, $studentId, $major)
  {
    // 親クラスのコンストラクタを呼び出す
    parent::__construct($name, $age);

    $this->studentId = $studentId;
    $this->major = $major;
  }

  // 追加のメソッド
  public function getStudentId()
  {
    return $this->studentId;
  }

  public function getMajor()
  {
    return $this->major;
  }

  // メソッドのオーバーライド
  public function introduce()
  {
    // 親クラスのメソッドを利用しつつ拡張
    $introduction = parent::introduce();
    return $introduction . " 学生番号は{$this->studentId}で、専攻は{$this->major}です。";
  }
}
