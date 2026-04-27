<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <img src="99.png">   
<h1>使用for迴圈來產生以下的數列</h1>

<ul>
    <li>1,3,5,7,9……n</li>
    <li>10,20,30,40,50,60……n</li>
    <li>3,5,7,11,13,17……97</li>
</ul><br>
<ul>
    <h3><li>1,3,5,7,9……n</li></h3>
</ul>
<?php

$n=100;
for($i=1; $i<=$n; $i+=2){
echo $i . " , ";
}
?>

<ul>
    <h3><li>10,20,30,40,50,60……n</li></h3>
</ul>
<?php

$n=100;
for($i=10; $i<=$n; $i+=10){
echo $i . " , ";
}

?>
<ul>  
    <h3><li>3,5,7,11,13,17……97</li></h3>
</ul>
<?php

$n=100;
for($j=1; $j<=$n; $j+=1){
$flag = true;
for($i=2; $i<$j; $i+=1){
   if($j % $i == 0){
    $flag=false;
    break;
   }}
   if($flag==true && $j>1){
   echo $j . ", ";}
 
}
echo "<br>";

$n=100;
for($j=1; $j<=$n; $j+=1){
$flag = true;
for($i=2; $i<=sqrt($j); $i+=1){
   if($j % $i == 0){
    $flag=false;
    break;
   }}
   if($flag==true && $j>1){
   echo $j . ", ";}
   }
?>
</body>
</html>