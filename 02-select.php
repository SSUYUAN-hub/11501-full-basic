<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>選擇結構練習</title>
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
            max-width: 600px;
            backdrop-filter: blur(10px);
        }
        h1 {
            color: #0090da;
            font-size: 1.6rem;
            margin-bottom: 20px;
            letter-spacing: 0.5px;
            text-align: center;
            font-weight: 600;
            margin-top: 20px;
        }
        h1:first-child {
            margin-top: 0;
        }
        .output {
            font-size: 1.05rem;
            margin-bottom: 20px;
            line-height: 1.8;
            word-break: break-all;
            background: linear-gradient(135deg, #f0f8ff 0%, #f0f4ff 100%);
            padding: 18px;
            border-radius: 10px;
            border-left: 4px solid #0090da;
            color: #1a3a52;
        }
        .back-btn {
            display: block;
            margin: 20px auto 0;
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
        .back-btn:active {
            transform: translateY(-1px);
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>選擇結構練習1</h1>
        <div class="output">
        <?php
        $score = 75;
        echo '成績為：' .$score . "分";
        echo "<br>";
        echo "判定為：";
        if($score >= 60) {
            echo "及格";
        } else {
            echo "不及格";
        }
        ?>
        </div>
        <h1>選擇結構練習2</h1>
        <div class="output">
        <?php
        $score = 85;
        $status =($score>=60) ? '及格':  '不及格';
        echo '成績為：' . $score . '分' . "<br>" . "判定為：" . $status;
        ?>
        </div>
        <h1>多選結構練習</h1>
        <div class="output">
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
        </div>
        <button class="back-btn" onclick="history.back()">返回上一頁</button>
    </div>
    <script>
        // 返回按鈕 hover 動畫
        const btn = document.querySelector('.back-btn');
        if (btn) {
            btn.addEventListener('mouseenter', () => {
                btn.style.boxShadow = '0 8px 25px rgba(0, 144, 218, 0.5)';
            });
            btn.addEventListener('mouseleave', () => {
                btn.style.boxShadow = '0 4px 15px rgba(0, 144, 218, 0.3)';
            });
        }
    </script>
</body>
</html>