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
              asort($array);  // 配列を昇順にソート
            } else {  
              arsort($array);  // 配列を降順にソート
            }
            
            foreach ($array as $num) {
                echo $num . '<br>';
            }
        }
  
        // ソートする配列を定義
        $nums = [15, 4, 18, 23, 10];
  
        // 昇順でソート
        echo '昇順にソートします<br>';
        sort_2way($nums, true);
        
        // 降順でソート
        echo '降順にソートします<br>';
        sort_2way($nums, false);
  
      ?>

    </p>
</body>

</html> 