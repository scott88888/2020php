<style>
    table {
        border: 2px solid black;
    }

    table td {
        border: 2px solid black;
    }
</style>

<?php
for ($z = 1; $z < 13; $z++) {
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
    $year = "2020";
    $fDay = "$year-$z-01";
    $fDayWeek = date("w", strtotime($fDay));
    $fDayBS = date("t", strtotime($fDay));
    $fDayMon = date("n", strtotime($fDay));
    echo "第" . $fDayMon . "月有" . $fDayBS . "天";
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
    echo "<br>";
}
    ?>