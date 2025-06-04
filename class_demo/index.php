<?php
// クラスの使用例を示すインデックスファイル
require_once 'Person.php';
require_once 'Student.php';
require_once 'MathHelper.php';

// Personクラスのインスタンス化
$person = new Person("田中太郎", 30);
echo "<h2>Personクラスの使用例</h2>";
echo "<p>" . $person->introduce() . "</p>";
echo "<p>名前: " . $person->getName() . "</p>";
echo "<p>年齢: " . $person->getAge() . "</p>";

// 情報の更新
$person->setName("鈴木花子");
$person->setAge(25);
echo "<p>情報更新後:</p>";
echo "<p>" . $person->introduce() . "</p>";

// Studentクラスのインスタンス化（継承の例）
$student = new Student("佐藤一郎", 20, "S12345", "情報科学");
echo "<h2>Studentクラスの使用例（継承）</h2>";
echo "<p>" . $student->introduce() . "</p>";
echo "<p>学生番号: " . $student->getStudentId() . "</p>";
echo "<p>専攻: " . $student->getMajor() . "</p>";

// 静的メソッドの使用例
echo "<h2>MathHelperクラスの使用例（静的メソッド）</h2>";
echo "<p>10 + 5 = " . MathHelper::add(10, 5) . "</p>";
echo "<p>10 - 5 = " . MathHelper::subtract(10, 5) . "</p>";
echo "<p>10 * 5 = " . MathHelper::multiply(10, 5) . "</p>";
echo "<p>10 / 5 = " . MathHelper::divide(10, 5) . "</p>";
echo "<p>10 / 0 = " . MathHelper::divide(10, 0) . "</p>";

// 定数の使用例
echo "<p>円周率: " . MathHelper::PI . "</p>";
echo "<p>半径5の円の面積: " . MathHelper::calculateCircleArea(5) . "</p>";

// クラスの基本概念の説明
echo "<h2>クラスの基本概念</h2>";
echo "<ul>";
echo "<li><strong>クラス</strong>: オブジェクト指向プログラミングの基本単位。データ（プロパティ）と振る舞い（メソッド）を一つにまとめたもの。</li>";
echo "<li><strong>プロパティ</strong>: クラス内の変数。オブジェクトの状態を表す。</li>";
echo "<li><strong>メソッド</strong>: クラス内の関数。オブジェクトの振る舞いを定義する。</li>";
echo "<li><strong>コンストラクタ</strong>: オブジェクトが生成される際に自動的に呼び出されるメソッド。初期設定を行う。</li>";
echo "<li><strong>アクセス修飾子</strong>: public, private, protectedなど。クラスの外部からのアクセス制限を設定する。</li>";
echo "<li><strong>継承</strong>: 既存のクラスの機能を受け継ぎ、新しいクラスを作成する仕組み。</li>";
echo "<li><strong>オーバーライド</strong>: 親クラスで定義されたメソッドを子クラスで再定義すること。</li>";
echo "<li><strong>静的メソッド</strong>: インスタンス化せずに直接クラス名で呼び出せるメソッド。</li>";
echo "<li><strong>クラス定数</strong>: クラス内で定義された変更不可能な値。</li>";
echo "</ul>";

// Laravelとの関連
echo "<h2>LaravelとPHPクラスの関係</h2>";
echo "<p>Laravelは完全にオブジェクト指向のフレームワークであり、すべての機能はクラスを通じて提供されています。例えば：</p>";
echo "<ul>";
echo "<li><strong>コントローラ</strong>: ユーザーリクエストを処理するクラス</li>";
echo "<li><strong>モデル</strong>: データベースとのやり取りを担当するクラス</li>";
echo "<li><strong>ミドルウェア</strong>: リクエスト処理の前後に実行される処理を定義するクラス</li>";
echo "<li><strong>サービスプロバイダ</strong>: アプリケーションの機能やサービスを登録するクラス</li>";
echo "</ul>";
echo "<p>そのため、PHPのクラスの理解はLaravelでの開発に不可欠です。</p>";
