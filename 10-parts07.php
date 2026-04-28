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
    table, th, td {
        border: 2px solid #d0e8f2;
        padding: 12px 16px;
        text-align: center;
        border-collapse: collapse;
        margin: 20px auto;
    }
    table {
        max-width: 800px;
        background: white;
        box-shadow: 0 4px 12px rgba(0, 144, 218, 0.1);
    }
    th {
        background: linear-gradient(135deg, #0090da 0%, #00b4d8 100%);
        color: white;
        font-weight: 600;
    }
    td {
        background: linear-gradient(135deg, #f0f8ff 0%, #f5fbff 100%);
        color: #2c3e50;
    }
    tr:hover td {
        background: linear-gradient(135deg, #e0f2f7 0%, #e8f8ff 100%);
        color: #0090da;
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
        <h1>陣列應用 - 成績表</h1>
    <?php
    $name = [
        "judy" => ["國文" => "95", "英文" => "64", "數學" => "70", "地理" => "90", "歷史" => "84"],
        "amo" => ["國文" => "88", "英文" => "78", "數學" => "54", "地理" => "81", "歷史" => "71"],
        "john" => ["國文" => "45", "英文" => "60", "數學" => "68", "地理" => "70", "歷史" => "62"],
        "peter" => ["國文" => "59", "英文" => "32", "數學" => "77", "地理" => "54", "歷史" => "42"],
        "hebe" => ["國文" => "71", "英文" => "62", "數學" => "80", "地理" => "62", "歷史" => "64"]
    ];

    echo "<table>";
    echo "<tr>";
    echo "<th>姓名</th>";
    echo "<th>國文</th>";
    echo "<th>英文</th>";
    echo "<th>數學</th>";
    echo "<th>地理</th>";   
    echo "<th>歷史</th>";
    echo "</tr>";
 
foreach($name as $student => $scores){
   
    echo "<tr><td>$student</td>";
    
    foreach($scores as $score){
      
        echo "<td>$score</td>";
            
    }
    echo "</tr>";
}
echo "</table>";
    ?>
        <button class="back-btn" onclick="history.back()">返回上一頁</button>
    </div>
</body>

echo "</table>";
    ?>
</body>

</html>