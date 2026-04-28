<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            font-size: 2rem;
            margin-bottom: 30px;
            text-align: center;
            font-weight: 600;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 30px auto;
            background: white;
            box-shadow: 0 4px 12px rgba(0, 144, 218, 0.1);
        }
        td {
            border: 2px solid #d0e8f2;
            padding: 14px 16px;
            text-align: center;
            background: linear-gradient(135deg, #f0f8ff 0%, #f5fbff 100%);
            color: #2c3e50;
            font-weight: 500;
        }
        tr:hover td {
            background: linear-gradient(135deg, #e0f2f7 0%, #e8f8ff 100%);
            color: #0090da;
        }
        pre {
            background: linear-gradient(135deg, #f0f8ff 0%, #f0f4ff 100%);
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #0090da;
            overflow-x: auto;
            color: #1a3a52;
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
        <h1>陣列九九乘法表</h1>
    <?php
    $nine = [];
    echo "<pre>";
    for ($i = 1; $i <= 9; $i++) {
        for ($j = 1; $j <= 9; $j++) {
            $nine[] = "$i x $j = " . ($i * $j);
        }
    }




    ?>
    <table>
        <tr>
            <?php

            foreach ($nine as $id => $item) {
                if ($id > 0 && $id % 9 == 0) {
                    echo "</tr><tr><td>$item</td>";
                } else {
                    echo "<td>$item</td>";
                }
            }
            echo "</table>";
            echo "</pre>";
            ?>
        <button class="back-btn" onclick="history.back()">返回上一頁</button>
    </div>
</body>
</body>

</html>