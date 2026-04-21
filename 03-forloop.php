<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>重複結構</title>
</head>
<body>
    <h1>重複結構練習</h1>

    <?php
    for($i=1; $i<=10; $i=$i+1){
        echo "$i=>";
        echo $i*10 . "<br>";
    }
    ?>
<h1>重複結構練習 遞增2</h1>
    <?php
    for($i=1 ; $i<=10; $i=$i+2){
        echo "$i=>";
        echo $i*10 . "<br>";
    }
    ?>
<h1>重複結構練習 奇數</h1>
    <?php
    for($i=1 ; $i<=10; $i=$i+2) { 
        echo "$i=>";
        echo $i*10 . "<br>";
    }
    ?>

<h1>重複結構練習 偶數</h1>
   <?php
for ($i = 1; $i <= 10; $i = $i + 1) { 
    if ($i % 2 == 0) { 
        // 只有當 $i 是偶數時，才執行大括號內的這兩行
        echo "$i=>";
        echo $i * 10 . "<br>";
    } else {
        // 如果是奇數，就不做任何事（或是輸出一句空白）
        echo ""; 
    }
}
?>

<h1>while loop練習</h1>
<?php
$score = 15;
echo '成績為：' . $score . "<br>";
$count = 0;
while($score <= 60){
$score = $score +10;
$count = $count + 1;
}
echo "登錄成績為" .$score ."分". "<br>" . "共登錄了" . $count . "次";
?>

<h1>foreach練習</h1>
<?php
$score=[10,20,30,40,50,60];
foreach($score as $idx => $val){
    echo '第'.($idx+1).'次成績為:' .$val."<br>";
}
?>
<P>&nbsp</P>
<P>&nbsp</P>
<P>&nbsp</P>
<P>&nbsp</P>
<P>&nbsp</P>
<P>&nbsp</P>
<P>&nbsp</P>
<P>&nbsp</P>
<P>&nbsp</P>
<P>&nbsp</P>
</body>
</html>