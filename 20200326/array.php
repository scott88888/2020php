<?php

//陣列array

// $a=array();
// $a=["小明","小白","小黑","小新","小灰"];
// $a=[12=>"小明",23=>"小白",30=>"小黑"];
$a=["小明"=>12,"小白"=>23,"小黑"=>30];


// echo $a;
// print_r($a);
echo "<pre>";print_r($a);"</pre>";
echo $a["小明"];
echo "<br>";
print_r(array_keys($a));



$b[]=11;
$b[]=22;
$b[]=33;
echo "<pre>";print_r($b);"</pre>";
echo "<br>";

$c[111]="小明" ;
$c[222]="小黑" ;
$c[333]="小白" ;
echo "<pre>";print_r($c);"</pre>";
print_r(array_keys($c));
echo "<br>";


$d=[[1,2,3],[4,5,6],[7,8,9]];
echo "<pre>";print_r($d);"</pre>";
echo "<br>";

$e=["小明"=>["國"=>"A","英"=>"C","數"=>"B"],
    "小白"=>["國"=>"A","英"=>"D","數"=>"D"],
    "小黑"=>30
    

];
echo "<pre>";print_r($e);"</pre>";

echo "<hr>";

//陣列函數
echo "count(\$e)=>";
echo count($e);
echo "<hr>";
echo "is_array(\$e)=>";
echo is_array($e);
echo "<hr>";
echo "in_array(\$e)=>";
echo in_array(["國"=>"A","英"=>"C","數"=>"B"],$e);
echo "<hr>";
echo "sort(\$e)=>";
sort($e);
echo "<pre>";print_r($e);"</pre>";
$f =array_fill(2,10,"ok");
echo "<pre>";print_r($f);"</pre>";

?>