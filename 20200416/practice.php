
<style>
table{
    border-collapse:collapse;

}
table td{
    border:1px solid #ccc;
    padding:5px;
    text-align:center;
}

body{
        margin: 0;
        text-align: center;
        color: black;
        background:gray;
        padding:0px;
        }
.wordwrap{
    display:flex;
}
.cal
</style>
<h4>月曆練習</h4>
<div>年份:2021</div>
<div class="wrapper">
<?php
$year="2021";
for($m=1;$m<=12;$m++){
?>
<div>月份:<?=$m;?></div>
<table class=flex>
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
$firstDay="$year-$m-01";

$firstDayWeek=date("w",strtotime($firstDay));
$monthDays=date("t",strtotime($firstDay));


for($i=0;$i<6;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        if($i==0 && $j<$firstDayWeek){
            echo "<td>";
            echo "</td>";
        }else{
            echo "<td>";
            $num=$i*7+$j+1-$firstDayWeek;
            if($num<=$monthDays){
                echo $num;
            }
            echo "</td>";
        }
    }
    echo "</tr>";   
}    
?>
</table>
<?php
}
?>
</div>