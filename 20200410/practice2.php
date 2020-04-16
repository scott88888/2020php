<?php

$myarr=[
    'a'=>'甲',
    'b'=>'乙',
    'c'=>'丙',
    ];
    //key不等於index ,一般來說index是數字  
    //第一個 index給a ,也就是預設的0變成a
    //第一個 a的value給甲,也就是值
    echo "<pre>";print_r($myarr);echo "</pre>";
$i=1;
$myarr[]=$i;
echo "<pre>";print_r($myarr);echo "</pre>";

// 我給了i=1,且放入了myarr陣列,所以現在i放在第四個位子 ,index為0但此時為key,因為已經給了這個陣列有key值


$myarr=[$i];
echo "<pre>";print_r($myarr);echo "</pre>";


?>