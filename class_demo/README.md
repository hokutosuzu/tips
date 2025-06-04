# PHP クラスデモ

PHPにおけるオブジェクト指向プログラミングの基本概念を学習するためのデモプロジェクトです。

## 📁 ファイル構成

```
class_demo/
├── Person.php       # 基本的なクラスの定義
├── Student.php      # 継承を使用したクラス
├── MathHelper.php   # 静的メソッドと定数を持つクラス
└── README.md        # このファイル（学習ガイド）
```

## 🎯 学習目標

このデモを通して以下の概念を理解できます：

- クラスとオブジェクトの基本
- プロパティとメソッド
- コンストラクタ
- アクセス修飾子（public, private）
- 継承とオーバーライド
- 静的メソッドとクラス定数

## 📚 クラス詳細

### 1. Person クラス (`Person.php`)

基本的なクラスの構造を学習します。

**特徴：**
- プライベートプロパティ（`$name`, `$age`）
- コンストラクタによる初期化
- ゲッター/セッターメソッド
- クラスメソッドの定義

**使用例：**
```php
// ファイルの読み込み
require_once 'Person.php';
require_once 'Student.php';
require_once 'MathHelper.php';

// Personクラスのインスタンス化
$person = new Person("田中太郎", 30);
echo $person->introduce(); // "こんにちは、私の名前は田中太郎です。30歳です。"

// ゲッター/セッターの使用
echo $person->getName(); // "田中太郎"
echo $person->getAge();  // 30

// 情報の更新
$person->setName("鈴木花子");
$person->setAge(25);
echo $person->introduce(); // 更新後の情報で自己紹介
```

### 2. Student クラス (`Student.php`)

継承とメソッドオーバーライドを学習します。

**特徴：**
- `Person`クラスを継承
- 追加のプロパティ（`$studentId`, `$major`）
- 親クラスのコンストラクタ呼び出し
- メソッドのオーバーライド

**使用例：**
```php
// Studentクラスのインスタンス化（継承の例）
$student = new Student("佐藤一郎", 20, "S12345", "情報科学");
echo $student->introduce(); // 親クラスのメソッドを拡張した自己紹介

// 学生固有の情報取得
echo $student->getStudentId(); // "S12345"
echo $student->getMajor();     // "情報科学"
```

### 3. MathHelper クラス (`MathHelper.php`)

静的メソッドとクラス定数を学習します。

**特徴：**
- 静的メソッド（インスタンス化不要）
- クラス定数の定義
- ユーティリティクラスとしての設計

**使用例：**
```php
// 静的メソッドの使用（インスタンス化不要）
echo MathHelper::add(10, 5);      // 15
echo MathHelper::subtract(10, 5); // 5
echo MathHelper::multiply(10, 5); // 50
echo MathHelper::divide(10, 5);   // 2
echo MathHelper::divide(10, 0);   // エラーメッセージ

// クラス定数の使用
echo MathHelper::PI; // 3.14159
echo MathHelper::calculateCircleArea(5); // 半径5の円の面積
```

## 🔧 主要概念の説明

### クラス（Class）
オブジェクト指向プログラミングの基本単位。データ（プロパティ）と振る舞い（メソッド）を一つにまとめたもの。

### プロパティ（Property）
クラス内の変数。オブジェクトの状態を表します。

### メソッド（Method）
クラス内の関数。オブジェクトの振る舞いを定義します。

### コンストラクタ（Constructor）
オブジェクトが生成される際に自動的に呼び出されるメソッド。初期設定を行います。

### アクセス修飾子（Access Modifier）
- `public`: どこからでもアクセス可能
- `private`: 同じクラス内からのみアクセス可能
- `protected`: 同じクラスまたは継承先クラスからアクセス可能

### 継承（Inheritance）
既存のクラスの機能を受け継ぎ、新しいクラスを作成する仕組み。

### オーバーライド（Override）
親クラスで定義されたメソッドを子クラスで再定義すること。

### 静的メソッド（Static Method）
インスタンス化せずに直接クラス名で呼び出せるメソッド。

### クラス定数（Class Constant）
クラス内で定義された変更不可能な値。

## 📖 参考情報

- [PHP公式ドキュメント - クラスとオブジェクト](https://www.php.net/manual/ja/language.oop5.php)
- [PHP公式ドキュメント - 継承](https://www.php.net/manual/ja/language.oop5.inheritance.php)
- [PHP公式ドキュメント - 静的キーワード](https://www.php.net/manual/ja/language.oop5.static.php)
