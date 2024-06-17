<!DoCTYPE HTML>
<html lang="ja">
     <head>
           <meta charset="utf-8">
           <title>WEb開発第4回</title>
           <link href="./style.css" rel="styleseet" type="text/css"/>
     </head>
            <h1>米山結翔</h1>
            <?php
                $money = 100*2 + 1000*1 + 200*2;
                $tax_money = $money * 1.08;
                print('税抜');
                print $money.('円 <br>');

                print('税込');
                print $tax_money.('円');

            ?> 
                
      
            
            
            
</html>