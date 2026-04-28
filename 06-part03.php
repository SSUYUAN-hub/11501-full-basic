<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>數列產生</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e8f4f8 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', 'Roboto', 'Noto Sans TC', Arial, sans-serif;
            color: #2c3e50;
            padding: 40px 20px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 144, 218, 0.15);
            padding: 40px;
            border: 2px solid #e0f2f7;
            backdrop-filter: blur(10px);
        }
        h1 {
            color: #0090da;
            font-size: 1.8rem;
            margin-bottom: 30px;
            text-align: center;
            font-weight: 600;
        }
        h3 {
            color: #0090da;
            font-size: 1.3rem;
            margin: 25px 0 15px;
            font-weight: 600;
            border-bottom: 2px solid #e0f2f7;
            padding-bottom: 10px;
        }
        ul {
            margin: 20px 0;
            padding-left: 30px;
        }
        li {
            margin: 10px 0;
            line-height: 1.8;
            color: #1a3a52;
        }
        .output {
            background: linear-gradient(135deg, #f0f8ff 0%, #f0f4ff 100%);
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #0090da;
            margin: 20px 0;
            color: #1a3a52;
            font-family: 'Courier New', monospace;
            word-break: break-word;
            line-height: 1.6;
        }
        img {
            max-width: 100%;
            height: auto;
            margin: 20px 0;
            border-radius: 10px;
        }
        .back-btn {
            display: block;
            margin: 30px auto 0;
            padding: 12px 32px;
            background: linear-gradient(135deg, #0090da 0%, #00b4d8 100%);
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 144, 218, 0.3);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            font-weight: 500;
        }
        .back-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 144, 218, 0.5);
            background: linear-gradient(135deg, #00b4d8 0%, #00d4ff 100%);
        }
    </style>
</head>
<body>
<div class="container">
 <img src="99.png">   
<h1>使用for迴圈來產生以下的數列</h1>

<ul>
    <li>1,3,5,7,9……n</li>
    <li>10,20,30,40,50,60……n</li>
    <li>3,5,7,11,13,17……97</li>
</ul>

<h3>1,3,5,7,9……n</h3>
<div class="output">
<?php

$n=100;
for($i=1; $i<=$n; $i+=2){
echo $i . " , ";
}
?>
</div>

<h3>10,20,30,40,50,60……n</h3>
<div class="output">
<?php

$n=100;
for($i=10; $i<=$n; $i+=10){
echo $i . " , ";
}

?>
</div>

<h3>3,5,7,11,13,17……97</h3>
<div class="output">
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
</div>

<button class="back-btn" onclick="history.back()">返回上一頁</button>
</div>
</body>
</html>