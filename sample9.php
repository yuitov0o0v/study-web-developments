<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>名前入力フォーム</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">名前:</label>
        <input type="text" id="name" name="name" required>
        <input type="submit" value="送信">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            echo "送信された値:". $name ;
        }
    ?>
</body>
</html>

