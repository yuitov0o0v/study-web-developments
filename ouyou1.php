<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset="utf-8">
        <title>Wed開発第5回</title>
    </head>
    <body>
        <div>
            <?php
                for ($i = 1; $i <= 365; $i++) {
                    $time = date("Y-m-d (D)", strtotime('+' . $i . ' day'));
                    print("$time<br>");
                }
                
            ?>
        </div>
    </body>
</html> 