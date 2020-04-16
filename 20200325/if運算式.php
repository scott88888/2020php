<?php
//if判斷

$score=110;
if($score<=60){
    echo "白粗";    
}else if($score<=70){
    echo "普普通";
}else if($score<=80){
    echo "一般般囉";
}else if($score<=90){
    echo "良好";
}else if($score<=100){
    echo "完美";
}else {
    echo "你輸入錯了吧";
}

//判斷
echo "<br>" ;
if ($score<=60) {
    echo "E";} 
else if($score<=70){
    echo "D";}
else if($score<=80){
    echo "C";}
else if($score<=90){
    echo "B";}
else { echo "A";
}


?>