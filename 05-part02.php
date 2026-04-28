<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>閏年判斷</title>
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
        h2 {
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
        input[type="text"],
        input[type="submit"] {
            margin: 15px 0;
            padding: 12px 16px;
            font-size: 1rem;
            border-radius: 8px;
            border: 2px solid #d0e8f2;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        input[type="text"] {
            width: 100%;
            color: #2c3e50;
            background: rgba(240, 248, 255, 0.8);
        }
        input[type="text"]:focus {
            outline: none;
            border-color: #0090da;
            box-shadow: 0 0 12px rgba(0, 144, 218, 0.3);
        }
        input[type="submit"] {
            background: linear-gradient(135deg, #0090da 0%, #00b4d8 100%);
            color: white;
            border: none;
            cursor: pointer;
            font-weight: 600;
            width: 100%;
            box-shadow: 0 4px 15px rgba(0, 144, 218, 0.3);
        }
        input[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 144, 218, 0.5);
            background: linear-gradient(135deg, #00b4d8 0%, #00d4ff 100%);
        }
        input[type="submit"]:active {
            transform: translateY(0);
        }
        .result {
            margin-top: 30px;
            padding: 20px;
            background: linear-gradient(135deg, #f0f8ff 0%, #f0f4ff 100%);
            border-radius: 10px;
            border-left: 4px solid #0090da;
            color: #1a3a52;
            font-size: 1.1rem;
            font-weight: 500;
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
        <h2>閏年判斷</h2>
        <p>給定一個西元年份，判斷是否為閏年</p>
        <ul>
            <li>地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。</li>
            <li>公元年分除以4不可整除，為平年。</li>
            <li>公元年分除以4可整除但除以100不可整除，為閏年。</li>
            <li>公元年分除以100可整除但除以400不可整除，為平年。</li>
        </ul>
        <input type="text" name="year" placeholder="請輸入西元年份">
        <input type="submit" value="判斷">
        <div class="result">
            <?php
            $year = 2000;
            $value = "";
            if (($year % 4 == 0 && $year % 100 != 0 )|| $year % 400 == 0){ 
                 $value = "閏年";
                
            } else {
                $value = "平年";
            }

            echo "$year 是 $value";

            ?>
        </div>
        <button class="back-btn" onclick="history.back()">返回上一頁</button>
    </div>
</body>

</html>