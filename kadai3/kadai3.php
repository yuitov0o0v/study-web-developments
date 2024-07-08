<?php
    try {
        // データベースに接続
        $pdo = new PDO('mysql:dbname=mydb;host=localhost;port=8890;charset=utf8', 'root', 'root');
        
        // フォームが送信されたかどうかを確認
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // 挿入するデータをフォームから取得
            $id = $_POST['id'];
            $username = $_POST['username'];
            $password = $_POST['password']; // パスワードはセキュリティに注意が必要です。この例では簡単に扱っています。

            // プリペアドステートメントを準備
            $stmt = $pdo->prepare("INSERT INTO login (id, username, password) VALUES (:id, :username, :password)");

            // 値をバインド
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);

            // 実行
            $stmt->execute();

            echo "データが正常に挿入されました。";
        }
    } catch (PDOException $e) {
        echo 'DB接続エラー: ' . $e->getMessage();
    }
?>


