<?php
//whiel 迴圈
$str ="today is a good day";
$find="s";
/*
for($i=0;$i<strlen())
*/




$status=false;
$position=0;
while($status==false){
    $tmp=mb_substr($str,$position,1,"utf8");  //利用函式mb_substr()來取得某個位子的字元

    if($tmp==$find){
        echo "字元".$find."在".$str."的第".$position."個位置";
        $status=true;
    }
    $position++;

}

echo "第".$position;


?>