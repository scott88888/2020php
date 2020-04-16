<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

for($i = 1 ; $i <= 9 ; $i++){
    echo "1 x " . $i . " = " . (1*$i) . " , ";
}
echo "<br>";
?>
<hr>

<?php
for ($z = 1 ; $z < 10   ; $z++){
    echo "1 x " . $z . " = " . (1*$z) . " , " ;
}
echo "<br>";

echo "<table border='3'>";    //"  裡面只能包''  "

for ($z = 1 ; $z < 9   ; $z++){
    echo "<tr>";
    
    for ($x = 1 ; $x < 9   ; $x++){
        echo "<td>" ."1X"  .$z ."=" .($z*$x) ."</td>";
        


    }
    echo "</tr>";
}
echo "</table>";
echo "<br>";
?>
<hr>

<?php
$Z=0;

echo "<table border='2'>" ;
for ($z==0 ; $z<9 ; $z++){
    echo "<tr>";

    for ($x=0 ; $x<9 ; $x++){
    
    if ($x==0 & $z==0) {
        echo "<td>"."&nbsp" ."</td>" ;}
        else if ($x==0 || $z==0){
        echo "<td>".($z+$x) ."</td>";}
        else { 
        echo "<td>" .($z*$x)  ."</td>";
        }
    }
    }
    echo "</tr>";

//為什麼不能使用 $x>=10  跟<9的意思不是一樣嗎  如果用>= 會變成錯誤 就顯示一個.
echo "</table>";
?>
 
<hr> 
</body>
</html>