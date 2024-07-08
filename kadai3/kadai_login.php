<?php
// フォームからのデータを受け取る
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    // データベースに接続
    try {
        $pdo = new PDO('mysql:dbname=mydb;host=localhost;port=8890;charset=utf8', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // SQLクエリを作成して実行
        $sql = "SELECT * FROM login WHERE id = '$id' AND username = '$username' AND password = '$password'";
        $stmt = $pdo->query($sql);

        // 結果を確認
        if ($stmt->rowCount() > 0) {
            // データが見つかった場合の処理
            echo "ログイン成功";
            // 他の処理を追加する場合はここに記述
        } else {
            // データが見つからなかった場合の処理
            echo "ログイン失敗";
        }
    } catch(PDOException $e) {
        echo "接続失敗: " . $e->getMessage();
    }

    // 接続を閉じる
    $pdo = null;
}
?>




