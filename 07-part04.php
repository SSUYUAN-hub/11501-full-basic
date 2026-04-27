<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九乘法表</title>
    <style>
.table1{
    border-collapse: collapse;
    width:40%;
    margin: 0 auto;
    border: 1px; solid #000;    
}
.table1 td{
    border: 1px solid #000;
    text-align: center;
}
h2{
text-align: center;

}
    </style>
</head>
<body>
 <h2>九九乘法表</h2>
<table class="table1">
<?php
for($j=1; $j<=9; $j++){

echo "<tr>";
for($i=1; $i<=9; $i++){
    echo "<td>";
 echo $i." x "."$j"." = ".($i*$j). "";
}echo"</td>";
echo "</tr>";
}
?>
<hr>

<?php
echo "<table class='table1'>";
for($j=1; $j<=9; $j++){
echo "<tr>";
for($i=1; $i<=9; $i++){
    echo "<td>";
 echo $i." x "."$j"." = ".($i*$j). "";
}echo"</td>";
echo "</tr>";
}
echo "</table>";
?>

<hr>
<?php
echo "<table class='table1'>";

// --- 第一部分：處理水平標頭 (Top Row) ---
echo "<tr style='background-color: red; color: white;'>";
echo "<td> </td>"; // 左上角空格
for ($h = 1; $h <= 9; $h++) {
    echo "<td>$h</td>";
}
echo "</tr>";

// --- 第二部分：處理九九乘法內容 ---
// 修正點：加上 $j = 1
for ($j = 1; $j <= 9; $j++) {
    echo "<tr>";
    
    // 垂直標頭（左側第一欄）
    echo "<td style='background-color: red; color: white; width: 30px;'>$j</td>";
    
    for ($i = 1; $i <= 9; $i++) {
        echo "<td style='padding: 8px;'>";
        if($i<=$j){
        // 這裡就是交叉計算的結果
        echo ($i * $j); 
        // 如果你還是想要印出 "1 x 1 = 1"，就用原本的寫法：
        // echo $i . " x " . $j . " = " . ($i * $j);
        echo "</td>"; 
    }
    else echo "";}
    echo "</tr>";
}

echo "</table>";
?>

?>


</table>
</body>
</html>