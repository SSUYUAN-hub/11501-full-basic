<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>重複結構</title>
    <style>
        body {
            background: linear-gradient(135deg, #0f2027, #2c5364 80%);
            min-height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', 'Roboto', Arial, sans-serif;
            color: #e0e0e0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .container {
            background: rgba(30, 40, 60, 0.85);
            border-radius: 18px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            padding: 32px 40px;
            border: 1.5px solid rgba(255, 255, 255, 0.08);
            min-width: 320px;
            margin-bottom: 24px;
        }

        h1 {
            color: #00ffe7;
            text-shadow: 0 0 12px #00ffe7cc, 0 2px 8px #232526;
            font-size: 2rem;
            margin-bottom: 18px;
            letter-spacing: 2px;
            text-align: center;
        }

        .output {
            font-size: 1.1rem;
            margin-bottom: 18px;
            line-height: 1.7;
            word-break: break-all;
        }

        .back-btn {
            display: block;
            margin: 0 auto;
            padding: 10px 28px;
            background: linear-gradient(90deg, #232526 60%, #00ffe7 100%);
            color: #232526;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            cursor: pointer;
            box-shadow: 0 2px 8px #00ffe733;
            transition: background 0.3s, color 0.3s, box-shadow 0.2s;
        }

        .back-btn:hover {
            background: linear-gradient(90deg, #00ffe7 0%, #232526 100%);
            color: #00ffe7;
            box-shadow: 0 0 24px #00ffe7cc;
        }
    </style>
</head>

<body>
    <h1>重複結構練習</h1>

    <?php
    for ($i = 1; $i <= 10; $i = $i + 1) {
        echo "$i=>";
        echo $i * 10 . "<br>";
    }
    ?>
    <div class="container">
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
        btn.addEventListener('mousemove', e => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            btn.style.boxShadow = `0 0 24px 6px #00ffe7cc, 0 0 0 0 #fff0`;
            btn.style.background = `radial-gradient(circle at ${x}px ${y}px, #00ffe7 40%, #232526 100%)`;
        });
        btn.addEventListener('mouseleave', () => {
            btn.style.boxShadow = '';
            btn.style.background = '';
        });
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