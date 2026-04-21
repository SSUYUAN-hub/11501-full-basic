<?php
$A=10;
$B=50;

echo '$A=' . $A;
echo '<br>';
echo '$B=' . $B . '<br>';
echo '交換後：<br>';

$temp=$A;
$A=$B;
$B=$temp;


echo '$A的新值=' . $A;
echo '<br>';
echo '$B的新值=' . $B;


?>