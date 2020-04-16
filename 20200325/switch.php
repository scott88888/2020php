<?php

$level ="";
$score =60;

echo "<br>";

if($score<=60){
    $level="D";
}else if($score<=70){
    $level ="C";
}else if($score<=80){
    $level ="B";
}else if($score<=90){
    $level ="A";
}else if($score<=100){
    $level ="S";
}else {
    
}
echo "你的成績是".$score ."分";
echo "<br>";
echo "所以是";
switch ($level){
    case "A":
    echo "A";
    break ;
    case "B":
    echo "B";
    break ;
    case "C":
    echo "C";
    break ;
    case "D":
    echo "D";
    break ;
    default:
}
echo "級" ;

// 運算到有break才會停止
echo "<br>";
//三元運算
$result= ($score<=60)?"該死":"下課";
echo $result;



?>