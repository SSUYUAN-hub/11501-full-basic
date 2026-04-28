<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>威力彩選號</title>
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
            font-size: 1.8rem;
            margin-bottom: 30px;
            letter-spacing: 0.5px;
            text-align: center;
            font-weight: 600;
        }
        ul {
            margin: 20px 0;
            padding-left: 30px;
        }
        li {
            margin: 12px 0;
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
            font-size: 1.1rem;
            font-weight: 500;
        }
        hr {
            margin: 20px 0;
            border: none;
            border-top: 2px solid #e0f2f7;
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
        <h1>威力彩電腦選號</h1>
        <ul>
            <li>使用亂數函式rand($a,$b)來產生號碼</li>
            <li>將產生的號碼順序存入陣列中</li>
            <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
            <li>完成選號後將陣列內容印出</li>
        </ul>
        <div class="output">
        <?php
$lotto=[];
while(count($lotto)<6){
$tmp=rand(1,38);
//echo "$tmp , ";

if(!in_array($tmp,$lotto)){
  
$lotto[]=$tmp;
//echo "<pre>";  
//print_r($lotto);
//echo "</pre>";   
}
//echo "<br>";
}
echo "<hr>";
foreach($lotto as $num){
echo "$num,";

}
echo "<br>特別號：";
echo rand(1,8);
?>
        </div>
        <button class="back-btn" onclick="history.back()">返回上一頁</button>
    </div>
</body>
</html>