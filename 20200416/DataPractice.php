<style>
table{
    border:2px solid black;
}
table td{
    border:2px solid black;
}


</style>

<table>
    <tr>
        <td>日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
    </tr>
<?php

//第一次練習
echo "第一次練習";
for($i=0;$i<5;$i++){

echo "<tr>";
    for($j=0;$j<7;$j++){

        echo "<td>";
        $x=($i*7+$j+1)-4;
        if ($x<0) {
        echo "&nbsp";
        }else{
        echo $x ."</td>" ;

        }
        
        
    }
    }
    echo "</tr>";
    echo "<br>";

echo "<hr>";
echo "<br>";

?>
</table>
<hr>
<table>
    <tr>
        <td>日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
    </tr>
<?php

//第二次練習 利用date取時間
echo "第二次練習 4月份";
$fDay="2020-02-01";
$fDayWeek=date("w",strtotime($fDay));
for($i=0;$i<5;$i++){
echo "<tr>";
    for($j=0;$j<7;$j++){
        echo "<td>";
        $x=($i*7+$j+1)-$fDayWeek;
        if ($x<=0) {
        echo "&nbsp";
        }else{
        echo $x ."</td>" ;
        }                
    }
    }
    echo "</tr>";
    echo "<br>";

echo "<hr>";  //0日多了超出3
?>

</table>


<hr>
<table>
    <tr>
        <td>日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
    </tr>
<?php
//第三次練習 利用date("t")取大小月
$fDay="2020-04-01";
$fDayWeek=date("w",strtotime($fDay));
$fDayBS=date("t",strtotime($fDay));
$fDayMon=date("n",strtotime($fDay));
echo "第三次練習".$fDayMon ."月有".$fDayBS ."天" ;
for($i=0;$i<5;$i++){
    echo "<tr>";
        for($j=0;$j<7;$j++){
            echo "<td>";
            $x=($i*7+$j+1)-$fDayWeek;
            if ($x<=0 || $x>$fDayBS) {
            echo "&nbsp";}
            else{
            echo $x ."</td>" ;
            }                
        }
        }
        echo "</tr>";
        echo "<br>";
    
    echo "<hr>";



?>
<?php
for($z=0;$z<12;$z++){

?>
<hr>
<table>
    <tr>
        <td>日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
    </tr>
    

<?php
$fDay="2020-04-01";
$fDayWeek=date("w",strtotime($fDay));
$fDayBS=date("t",strtotime($fDay));
$fDayMon=date("n",strtotime($fDay));
echo "第".$fDayMon ."月有".$fDayBS ."天" ;
for($i=0;$i<5;$i++){
    echo "<tr>";
        for($j=0;$j<7;$j++){
            echo "<td>";
            $x=($i*7+$j+1)-$fDayWeek;
            if ($x<=0 || $x>$fDayBS) {
            echo "&nbsp";}
            else{
            echo $x ."</td>" ;
            }                
        }
        }
        echo "</tr>";
        echo "<br>";
    


}
?>