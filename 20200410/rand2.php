
<h4>五百年內的閏年</h4>
<hr>
<?php
/* $year=2020;
echo "西元年:".$year;
echo "<br>"; */
$year=[];   //空陣列
for($i=2020;$i<2520;$i++){
    echo "西元年:".$i."是";
    if( $i%4 == 0  &&  ($i%100 !=0 || $i%400==0)){

        echo "閏年";
        $year[]=$i;

    }else{

        echo "平年";

    }  
    echo "<hr>";
}

echo "閏年陣列";
echo "<pre>";print_r($year);echo "</pre>";


$testYear=rand(2020,2520);
if(in_array($testYear,$year)){
    echo $testYear."是閏年";
}else{
    echo $testYear."是平年";

}
?>
<hr>

