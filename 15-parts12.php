<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>反轉陣列</title>
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
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }
        .container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 144, 218, 0.15);
            padding: 40px;
            border: 2px solid #e0f2f7;
            max-width: 700px;
            backdrop-filter: blur(10px);
        }
        h1 {
            color: #0090da;
            font-size: 1.6rem;
            margin-bottom: 30px;
            letter-spacing: 0.5px;
            text-align: center;
            font-weight: 600;
            line-height: 1.8;
        }
        p {
            color: #1a3a52;
            margin: 15px 0;
            line-height: 1.8;
            font-size: 1.05rem;
        }
        .output {
            background: linear-gradient(135deg, #f0f8ff 0%, #f0f4ff 100%);
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #0090da;
            margin: 20px 0;
            color: #2c3e50;
            font-family: 'Courier New', monospace;
            font-size: 1rem;
            white-space: pre-wrap;
        }
        pre {
            background: inherit;
            padding: 0;
            margin: 0;
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
   <h1>請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)</h1>
<p>例：$a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]</p>

<div class="output">
原陣列：
<pre>
<?php
$old=[2,4,6,1,8];
print_r ($old);
?>
</pre>
</div>

<div class="output">
<?php
for($i=0;$i<count($old)/2;$i++){
$max_idx=count($old)-1;
$tmp=$old[$i];
$old[$i]=$old[$max_idx-$i];
$old[$max_idx-$i]=$tmp;
}
echo "反轉後的陣列：<pre>";
print_r ($old);
echo "</pre>";
?>
</div>

<button class="back-btn" onclick="history.back()">返回上一頁</button>
</div>
</body>
</html>