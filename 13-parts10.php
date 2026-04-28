<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>五百年內閏年</title>
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
            font-size: 1rem;
            font-weight: 500;
            word-break: break-word;
            line-height: 1.8;
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
<h1>找出五百年內的閏年</h1>

<ul>
    <li>請依照閏年公式找出五百年內的閏年</li>
    <li>使用陣列來儲存閏年</li>
    <li>使用迴圈來印出閏年</li>
</ul>

    <div class="output">
    <?php
    $year = 2000;
    $years=[];
for($i=$year;$i>$year-500;$i--){
    if (($i % 4 == 0 && $i % 100 != 0 )|| $i % 400 == 0){ 
         $years[]=$i;      
    } 

}
//echo "<pre>";
//print_r ($years);
//echo "</pre>";

foreach($years as $year => $leap_year){
echo "$leap_year ,";
}
    ?>
    </div>

    <?php
$the_year=2026;

    ?>
    <button class="back-btn" onclick="history.back()">返回上一頁</button>
</div>
</body>
</html>