<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>重複結構</title>
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
            margin: 20px 0 18px;
            letter-spacing: 0.5px;
            text-align: center;
            font-weight: 600;
        }
        h1:first-child {
            margin-top: 0;
        }
        ul {
            margin: 15px 0 20px;
            padding-left: 20px;
        }
        li {
            margin: 10px 0;
            color: #1a3a52;
        }
        .output {
            font-size: 1.05rem;
            margin-bottom: 18px;
            line-height: 1.8;
            word-break: break-all;
            background: linear-gradient(135deg, #f0f8ff 0%, #f0f4ff 100%);
            padding: 16px;
            border-radius: 10px;
            border-left: 4px solid #0090da;
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
        .back-btn:active {
            transform: translateY(-1px);
        }
        p {
            display: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>重複結構練習</h1>

        <?php
        for ($i = 1; $i <= 10; $i = $i + 1) {
            echo "$i=>";
            echo $i * 10 . "<br>";
        }
        ?>
        <h1>重複結構練習 遞增2</h1>
        <?php
        for ($i = 1; $i <= 10; $i = $i + 2) {
            echo "$i=>";
            echo $i * 10 . "<br>";
        }
        ?>
        <h1>重複結構練習 奇數</h1>
        <?php
        for ($i = 1; $i <= 10; $i = $i + 2) {
            echo "$i=>";
            echo $i * 10 . "<br>";
        }
        ?>

        <h1>重複結構練習 偶數</h1>
        <?php
        for ($i = 1; $i <= 10; $i = $i + 1) {
            if ($i % 2 == 0) {
                // 只有當 $i 是偶數時，才執行大括號內的這兩行
                echo "$i=>";
                echo $i * 10 . "<br>";
            } else {
                // 如果是奇數，就不做任何事（或是輸出一句空白）
                echo "";
            }
        }
        ?>

        <h1>while loop練習</h1>
        <?php
        $score = 15;
        echo '成績為：' . $score . "<br>";
        $count = 0;
        while ($score <= 60) {
            $score = $score + 10;
            $count = $count + 1;
        }
        echo "登錄成績為" . $score . "分" . "<br>" . "共登錄了" . $count . "次";
        ?>

        <h1>foreach練習</h1>
        <?php
        $score = [10, 20, 30, 40, 50, 60];
        foreach ($score as $idx => $val) {
            echo '第' . ($idx + 1) . '次成績為:' . $val . "<br>";
        }
        ?>

        <h1>分配成績等級</h1>
        <ul>
            <li>給定一個成績數字，根據成績所在的區間，給定等級</li>
            <li>0~59 => E</li>
            <li>60~69 => D</li>
            <li>70~79 => C</li>
            <li>80~89 => B</li>
            <li>90~100 => A</li>
        </ul>
        <?php
        $score = 101;
        $level = '';
        if ($score >= 0 && $score < 60) {
            $level = 'E';
        } else if ($score >= 60 && $score < 70) {
            $level = 'D';
        } else if ($score >= 70 && $score < 80) {
            $level = 'C';
        } else if ($score >= 80 && $score < 90) {
            $level = 'B';
        } else if ($score >= 90 && $score <= 100) {
            $level = 'A';
        } else {
            echo "成績輸入錯誤";
        }
        if ($level !== '') {
            echo '成績為:' . $score . '分' . "評定等級為:" . $level . "等級";
        }
        ?>
        <h1>簡化寫法</h1>
        <?php
        $score = 10;
        $level = '';
        if ($score < 0 || $score > 100) {
            echo "成績輸入錯誤";
        } else if ($score < 60) {
            $level = 'E';
        } else if ($score < 70) {
            $level = 'D';
        } else if ($score < 80) {
            $level = 'C';
        } else if ($score < 90) {
            $level = 'B';
        } else if ($score <= 100) {
            $level = 'A';
        }
        if ($level !== '') {
            echo '成績為:' . $score . '分' . "<br>" . "評定等級為:" . $level . "等級";
        }
        ?>
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

    <P>&nbsp</P>
    <P>&nbsp</P>
    <P>&nbsp</P>
    <P>&nbsp</P>
    <P>&nbsp</P>
    <P>&nbsp</P>
    <P>&nbsp</P>
    <P>&nbsp</P>
</body>

</html>