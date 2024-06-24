<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>BMIフォーム</title>
</head>
<body>
    </form>
    <?php
        session_start();
        $_SESSION['name'] = 'yuito';
        $_SESSION['email'] = 'user@gmail.com';
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
    ?>
</body>
</html>



