<h4>亂數</h4>
<hr>
<?php
//亂數
$num=[];
for ($i=0;$i<6;$i++){
    $num[]=rand(1,38);
}
echo "<pre>" ; print_r($num);
echo "</pre>";


for ($i=0;$i<6;$i++){
    for($j=0;$j<=5;$j++){

    if($i!=$j && $num[$j]==$num[$i]){
        // unset($num[$j]);
        // array_splice($num,$j,1);
        $num[$j]=rand(1,38);


        }
    }
}

echo "<hr>";
foreach ($num as $n){
    echo $n .',' ;
}
echo "<hr>";
foreach ($num as $key => $n){
    echo $n .',' ;
}
echo "<hr>";
?>
<?php

$num=[];
$counts=0;
while(count($num)<6){
    $counts++;
    if(count($num)>0) {
        $tmp=rand(1,38);
        if(!in_array($tmp,$num)){
            $num[]=$tmp;
        }else{
            echo "重複".$tmp;
        }
     }else{
            $num[]=rand(1,38);

    }
}

    
echo "<pre>" ; 
print_r($num);
echo "</pre>";
echo "run" .$counts."times";

?>