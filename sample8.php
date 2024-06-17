<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset="utf-8">
        <title>Wed開発第5回</title>
    </head>
    <body>
        <div>
            <?php
                $i = [
                    'apple'=>'りんご',
                    'lemon'=>'レモン',
                    'grape'=>'ブドウ',
                    'tomto'=>'トマト',
                ];
                foreach ($i as $key => $value){
                    print("英語:{$key} <br>");
                    print("日本語:{$value} <br>");
                }
            ?>
        </div>
    </body>
</html> 