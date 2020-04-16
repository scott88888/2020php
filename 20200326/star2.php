<?php

//老師解法 
//共9行 所以i迴圈執行9次
for ($i=0;$i<9;$i++){

//利用判斷式 來決定t值 再用t的值來決定空白及星星數量

if ($i<=4){
$t=$i;
}else {
    $t=8-$i;
}

//印空白
    for ($k=0;$k<(4-$t);$k++){
    echo "⚉";  //none break space 
    }

//印星星
    for ($j=0;$j<($t*2+1);$j++){
        echo "▲" ; 
    }

    echo "<br>";
}


?>