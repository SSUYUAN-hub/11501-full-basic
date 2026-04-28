<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>星星幾何圖</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e8f4f8 100%);
            min-height: 100vh;
            font-family: 'Courier New', 'Segoe UI', 'Roboto', 'Noto Sans TC', Arial, sans-serif;
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
            margin: 30px 0 15px;
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
            color: #1a3a52;
            line-height: 1.8;
        }
        img {
            max-width: 100%;
            height: auto;
            margin: 20px 0;
            border-radius: 10px;
        }
        .output {
            background: linear-gradient(135deg, #f0f8ff 0%, #f0f4ff 100%);
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #0090da;
            margin: 15px 0;
            color: #2c3e50;
            font-family: 'Courier New', monospace;
            white-space: pre;
            overflow-x: auto;
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
    <h1>以 * 符號為基礎在網頁上排列出下列圖形</h1>

    <ul>
        <li>直角三角型</li>
        <li>倒直角三角型</li>
        <li>正三角型</li>
        <li>菱型</li>
        <li>矩形</li>
        <li>內含對角線的矩形</li>
    </ul>
    <img src="stars.png" alt="星星圖案">
    
    <h3>直角三角型</h3>
    <div class="output">
    <?php
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    ?>
    </div>
    <div class="output">
    <?php
        for ($i = 0; $i < 6; $i++) {
            for ($j = 0; $j < 6; $j++) {
                if ($j < $i) {
                    echo "*";
                }
            }
            echo "<br>";
        }
    ?>
    </div>
    
    <h3>倒直角三角型</h3>
    <div class="output">
    <?php
        for ($i = 5; $i > 0; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    ?>
    </div>
    <div class="output">
    <?php
        for ($i = 0; $i < 6; $i++) {
            for ($j = 0; $j < 6; $j++) {
                if ($j > $i) {
                    echo "*";
                }
            }
            echo "<br>";
        }
    ?>
    </div>
    
    <h3>正三角型</h3>
    <div class="output">
    <?php
        for ($i = 1; $i <= 5; $i++) {
            for ($A = 1; $A <= 5 - $i; $A++) {
                echo "&nbsp;";
            }
            for ($j = 1; $j <= (2 * $i - 1); $j++) {
                echo "*";
            }
            echo "<br>";
        }
    ?>
    </div>
    <div class="output">
    <?php
        for ($i = 0; $i < 5; $i++) {
            for ($A = 0; $A < 4 - $i; $A++) {
                echo "&nbsp;";
            }

            for ($j = 0; $j < (2 * $i + 1); $j++) {
                echo "*";
            }
            echo "<br>";
        }
    ?>
    </div>
    
    <h3>菱型</h3>
    <div class="output">
    <?php
        for ($i = 1; $i <= 5; $i++) {
            for ($A = 0; $A <= 4 - $i; $A++) {
                echo "&nbsp;";
            }
            for ($j = 1; $j <= (2 * $i - 1); $j++) {
                echo "*";
            }
            echo "<br>";
        }

        for ($i = 4; $i > 0; $i--) {
            for ($A = 1; $A <= 5 - $i; $A++) {
                echo "&nbsp;";
            }
            for ($j = 1; $j <= (2 * $i - 1); $j++) {
                echo "*";
            }
            echo "<br>";
        }
    ?>
    </div>
    
    <div class="output">
    <?php
        for ($i = 0; $i < 9; $i++) {
            if ($i <= 4) {
                $t = $i;
            } else {
                $t = 8 - $i;
            }
            for ($A = 0; $A < 4 - $t; $A++) {
                echo "&nbsp;";
            }
            for ($j = 0; $j < (2 * $t + 1); $j++) {
                echo "*";
            }
            echo "<br>";
        }
    ?>
    </div>
    
    <div class="output">
    <?php
        for ($i = 0; $i < 9; $i++) {
            if ($i <= 4) {
                $A = $i;
            } else {
                $A = 8 - $i;
            }
            for ($j = 0; $j > 4 - $A; $j++) {
                echo "&nbsp;";
            }
            for ($k = 0; $k < (2 * $t + 1); $k++) {
                echo "*";
            }
            echo "<br>";
        }
    ?>
    </div>
    
    <h3>矩形</h3>
    <div class="output">
    <?php
        for ($i = 0; $i < 7; $i++) {
            for ($j = 0; $j < 7; $j++) {
                if ($i == 0 || $i == 6) {
                    echo "*";
                } else if ($j == 0 || $j == 6) {
                    echo "*";
                } else {
                    echo "&nbsp;";
                }
            }
            echo "<br>";
        }
    ?>
    </div>
    
    <h3>內含對角線的矩形</h3>
    <div class="output">
    <?php
        for ($i = 0; $i < 7; $i++) {
            for ($j = 0; $j < 7; $j++) {
                if ($i == 0 || $i == 6) {
                    echo "*";
                } else if ($j == 0 || $j == 6 || $i == $j || $i + $j == 6) {
                    echo "*";
                } else {
                    echo "&nbsp;";
                }
            }
            echo "<br>";
        }
    ?>
    </div>

    <h3>參數化圖形</h3>
    <div class="output">
    <?php
        $n = "bv";
        if (!is_numeric($n)) {
            die ("必須輸入數字");
        }
        if ($n % 2 == 0) {
            $n++;
        }
        if ($n < 4) {
            echo "數字必須大於或等於4";
        }
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($i == 0 || $i == $n - 1) {
                    echo "*";
                } else if ($j == 0 || $j == $n - 1 || $i == $j || $i + $j == $n - 1) {
                    echo "*";
                } else {
                    echo "&nbsp;";
                }
            }
            echo "<br>";
        }
    ?>
    </div>
    
    <button class="back-btn" onclick="history.back()">返回上一頁</button>
</div>
</body>

</html>