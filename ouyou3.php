<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>BMIフォーム</title>
</head>
<body>
    <form action="" method="post">
        <label for="weight">体重：</label>
        <input type="number" id="weight" name="weight" required>
        <label for="height">身長(cm):</label>
        <input type="number" id="height" name="height" required>
        <input type="submit" value="送信">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $weight = $_POST['weight'];
            $height = $_POST['height'];
            $height1 = $height / 100;
            $bmi = $weight / ($height1 ** 2);
            echo "現在の体重：" . $weight . "kg<br>";
            $risou = $height1 ** 2 * 22;
            echo "理想の体重：" . $risou . "kg<br>";
            echo "BMI: " . $bmi;
        }
    ?>
</body>
</html>



