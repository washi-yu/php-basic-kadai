<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
         function sort_2way($array, $order){
            if ($order === true) {
                echo '昇順にソートします<br>';
              asort($array);  // 配列を昇順にソート
            } else {  
                echo '降順にソートします<br>';
              arsort($array);  // 配列を降順にソート
            }
            
            foreach ($array as $num) {
              
                echo $num . '<br>';
            }
        }
  
        // ソートする配列を定義
        $nums = [15, 4, 18, 23, 10];
  
        // 昇順でソート
        
        sort_2way($nums, true);
        
        // 降順でソート
      
        sort_2way($nums, false);
  
      ?>

    </p>
</body>

</html> 