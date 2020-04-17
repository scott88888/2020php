<style>
    body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
table{
    border:2px solid black;
    border-collapse: collapse;
}
table td{
    border:1px solid black;
    padding: 5px;
    text-align: center;
}
.calendar-block {
    display: inline-flex;
    width: 25%;
    justify-content: center;
    align-items: center;
    padding: 10px;
}
</style>
<h4 style="text-align:center">月曆</h4>
<div style="text-align:center">年份:2020</div>
<div class="wrapper">
<?php
for ($z = 1; $z < 13; $z++) {
    echo  "<div class='calendar-block'>";
?>
   
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
    $year = "2020";
    $fDay = "$year-$z-01";
    $fDayWeek = date("w", strtotime($fDay));
    $fDayBS = date("t", strtotime($fDay));
    $fDayMon = date("n", strtotime($fDay));
    echo $fDayMon . "月份";
    for ($i = 0; $i < 5; $i++) {
        echo "<tr>";
        for ($j = 0 ; $j < 7; $j++) {
            echo "<td>";
            $x = ($i * 7+ $j + 1) - $fDayWeek;
            if ($x <= 0 || $x > $fDayBS) {
                echo "&nbsp";
            } else {
                echo $x . "</td>";
            }
        }
    }
    echo "</tr>";
  
    ?>
    </table>
    <?php
echo "</div>";
}
?>
</div>