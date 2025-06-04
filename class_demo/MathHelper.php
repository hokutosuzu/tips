<?php

/**
 * 静的メソッドと定数を持つクラスの例
 * ユーティリティクラスとして設計されており、インスタンス化不要で使用可能
 *
 * @author PHP学習デモ
 * @version 1.0
 */
class MathHelper
{
  /**
   * 円周率の定数
   * @const float
   */
  const PI = 3.14159;

  /**
   * 加算を行う静的メソッド
   *
   * @param float $a 第一の数値
   * @param float $b 第二の数値
   * @return float 加算結果
   */
  public static function add($a, $b)
  {
    return $a + $b;
  }

  /**
   * 減算を行う静的メソッド
   *
   * @param float $a 第一の数値（被減数）
   * @param float $b 第二の数値（減数）
   * @return float 減算結果
   */
  public static function subtract($a, $b)
  {
    return $a - $b;
  }

  /**
   * 乗算を行う静的メソッド
   *
   * @param float $a 第一の数値
   * @param float $b 第二の数値
   * @return float 乗算結果
   */
  public static function multiply($a, $b)
  {
    return $a * $b;
  }

  /**
   * 除算を行う静的メソッド
   * ゼロ除算のエラーハンドリング付き
   *
   * @param float $a 被除数
   * @param float $b 除数
   * @return float|string 除算結果またはエラーメッセージ
   */
  public static function divide($a, $b)
  {
    if ($b == 0) {
      return "0で割ることはできません";
    }
    return $a / $b;
  }

  /**
   * 円の面積を計算する静的メソッド
   *
   * @param float $radius 半径
   * @return float 円の面積
   */
  public static function calculateCircleArea($radius)
  {
    return self::PI * $radius * $radius;
  }
}
