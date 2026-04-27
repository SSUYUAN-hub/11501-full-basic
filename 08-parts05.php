<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 $str="美國華盛頓白宮記者晚宴發生槍擊事件，一名攜帶多種武器的男子試圖衝破安檢並開槍，美國總統川普（Donald Trump）被特勤局緊急撤離。官方說明，這名嫌犯的目標很可能就是川普。然而，在美國、日本、台灣卻出現許多指責川普的言論，在中國的網路上，冷嘲熱諷更成為主流聲音。對此，資深媒體人矢板明夫表示，這會讓人產生一種錯覺，只要對象是自己不喜歡的人，對他的暴力行為好像就可以被淡化，甚至被合理化，這樣的氛圍很危險。政治可以對立，但暴力絕對不能被容忍。";
 $target="晚宴";
 $pos=0;


/*1.怎麼知道字串有多長? =>mb_strlen()
2.怎麼只取兩個字? =>mb_substr()
3.如何算位置?=>$pos +1
*/
echo "字串" . $str . "<br>";
echo "尋找的字" . $target . "<br>";
$count=0;
$flag=false;
while($pos < mb_strlen($str)-mb_strlen($target)+1){
 $tmp=mb_substr($str,$pos,mb_strlen($target));
 if($tmp==$target){
echo "找到了，位置在：" . ($pos+1). "<br>";
$flag=true;
 }
$pos++;
$count++;
}
if(!$flag){
    echo"沒有找到<br>";
}
echo "總共尋找了：" . $count . "次<br>";
 ?>
</body>
</html>