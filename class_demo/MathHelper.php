<?php
// 静的メソッドと定数を持つクラスの例
class MathHelper
{
  // クラス定数
  const PI = 3.14159;

  // 静的メソッド（インスタンス化せずに呼び出せるメソッド）
  public static function add($a, $b)
  {
    return $a + $b;
  }

  public static function subtract($a, $b)
  {
    return $a - $b;
  }

  public static function multiply($a, $b)
  {
    return $a * $b;
  }

  public static function divide($a, $b)
  {
    if ($b == 0) {
      return "0で割ることはできません";
    }
    return $a / $b;
  }

  // 円の面積を計算する静的メソッド
  public static function calculateCircleArea($radius)
  {
    return self::PI * $radius * $radius;
  }
}
