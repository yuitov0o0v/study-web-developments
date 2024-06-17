<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset="utf-8">
        <title>Wed開発第4回</title>
    </head>
    <body>
        <div>
            <?php
                for($i = 1; $i <= 100; $i++) {
                    if ($i % 2 == 0) {
                        // Do nothing for odd numbers
                    } else {
                        print($i . "</br>");
                    }
                }
                
            ?>
        </div>
    </body>
</html> 