<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
*{font-family: 'Courier New', Courier, monospace;
}

    </style>
</head>

<body>
    <h1>以 * 符號為基礎在網頁上排列出下列圖形: </h1>

    <ul>
        <li>直角三角型</li>
        <li>倒直角三角型</li>
        <li>正三角型</li>
        <li>菱型</li>
        <li>矩形</li>
        <li>內含對角線的矩形</li>
    </ul>
    <img src="stars.png">
    <ul>
        <h3>直角三角型</h3>
        <?php
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
        ?> 
        <hr>
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
        <h3>倒直角三角型</h3>
          <?php
        for ($i = 5; $i > 0; $i--) {
            for ($j = 1; $j <= $i; $j++) {  
                    echo "*";    
            }
            echo "<br>";
        }
        ?>
        <hr>
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
        <h3>正三角型</h3>
             <?php
        for ($i = 1; $i <= 5; $i++) {
            for ($A = 1; $A <= 5 - $i; $A++){
                echo "&nbsp;";
            }
            for ($j = 1; $j <= (2*$i-1); $j++) {  
                    echo "*";    
            }
            echo "<br>";
        }
        ?>
 <hr>
        <?php
        for($i=0;$i<5;$i++){
for($A=0;$A<4-$i;$A++){
    echo "&nbsp;";
}

for($j=0;$j<(2*$i+1);$j++){
echo "*";

}
echo "<br>";
        }
        ?>
       
        
        <h3>菱型</h3>
        <h3>矩形</h3>
        <h3>內含對角線的矩形</h3>
    </ul>
</body>

</html>