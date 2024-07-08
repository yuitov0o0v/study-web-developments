<?php
// フォームから送信されたデータの取得
$id = $_POST['id']; // Assuming 'id' is submitted via POST
$username = $_POST['username'];
$password = $_POST['password'];

try {
    // データベースへの接続
    $pdo = new PDO('mysql:dbname=mydb;host=localhost;port=8890;charset=utf8', 'root', 'root');
    // エラーモードを例外モードに設定
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQLクエリの作成と実行（ユーザー名とパスワードの照合）
    $sql = "SELECT * FROM users WHERE username=:username AND password=:password";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);
    $stmt->execute();

    // 結果の確認
    if ($stmt->rowCount() > 0) {
        // ログイン成功時の処理
        echo "ログイン完了です";
    } else {
        // ログイン失敗時の処理
        echo "ユーザー名またはパスワードが違います";
    }

    // データベース接続のクローズ
    $pdo = null;
} catch (PDOException $e) {
    die("データベース接続エラー: " . $e->getMessage());
}
?>


