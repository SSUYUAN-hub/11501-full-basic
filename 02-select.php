<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>選擇結構練習</title>
</head>
<body>
<h1>選擇結構練習1</h1>
<?php
$score = 75;

echo '成績為：' .$score . "分";
echo "<br>";
echo "判定為：";

if($score >= 60) {
    //判斷式為'真'時執行這段的程式碼
    echo "及格";
} else {
    //判斷式為'假'時執行這段的程式碼
    echo "不及格";
}
?>
<h1>選擇結構練習2</h1>
<?php
$score = 85;
$status =($score>=60) ? '及格':  '不及格';
echo '成績為：' . $score . '分' . "<br>" . "判定為：" . $status;
?>

<h1>多選結構練習</h1>

<?php
$level = 'B';

echo '成績等級為：' . $level . "<br>";
echo '判定為：';
switch($level){
    case 'A':
        echo "表現優良，請繼續保持";
    break;
    case 'B':
        echo '值得肯定，還有進步空間';
    break;
    case 'C':
        echo '需要更多的練習';
    break;
    case 'D':
        echo '需要加強基本功';
    break;
    default:
        echo '是否無心學業?';
}
?>

</body>
</html>