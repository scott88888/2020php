<style>
    body{
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0; 
            background-color: black;
            color: white;
        }
    td{
        font-size: 22px;
        text-align: center;
        border: 1px solid white;
        width:30px;
        height:20px;
    }
    .ani4{
           font-size: 10rem;
           font-family: Arial, Helvetica, sans-serif;
           text-transform: uppercase;
           letter-spacing: 1rem;
           border: 1px solid white;
           padding: 10px 0 10px 1rem;
           animation: demo4_text 5s linear infinite , demo4_box 5s  linear infinite;
           
           }
           @keyframes demo4_text{
            0%,100%{
                text-shadow:0px 0px 2rem #ff0000ff,0px 0px 2rem #ff000099;}
                33%{
                text-shadow:0px 0px 2rem #ff0000ff,0px 0px 2rem #ff000099;}
                66%{
                text-shadow:0px 0px 2rem #ff0000ff,0px 0px 2rem #ff000099;}
                100%{
                text-shadow:0px 0px 2rem #ff0000ff,0px 0px 2rem #ff000099;}
               
            }
            @keyframes demo4_box{
                0%{
                    box-shadow:0px 0px 18px 5px red,0px 0px 18px 5px #ff000000,inset 0px 0px 18px 5px red ;
                }
                13%{
                    box-shadow:0px 0px 18px 5px #f80,0px 0px 18px 5px #ffff0000,inset 0px 0px 18px 5px #f80 ;
                }
                26%{
                    box-shadow:0px 0px 18px 5px #ff0,0px 0px 18px 5px #ff000000,inset 0px 0px 18px 5px #ff0 ;
                }
                39%{
                    box-shadow:0px 0px 18px 5px #0f0,0px 0px 18px 5px #ff000000,inset 0px 0px 18px 5px #0f0 ;
                }
                52%{
                    box-shadow:0px 0px 18px 5px #0f8,0px 0px 18px 5px #ff000000,inset 0px 0px 18px 5px #0f8 ;
                }
                65%{
                    box-shadow:0px 0px 18px 5px #0ff,0px 0px 18px 5px #ff000000,inset 0px 0px 18px 5px #0ff ;
                }
                78%{
                    box-shadow:0px 0px 18px 5px #00f,0px 0px 18px 5px #ff000000,inset 0px 0px 18px 5px #00f ;
                }
                81%{
                    box-shadow:0px 0px 18px 5px #f0f,0px 0px 18px 5px #ff000000,inset 0px 0px 18px 5px #f0f ;
                }
                95%{
                    box-shadow:0px 0px 18px 5px red,0px 0px 18px 5px #ff000000,inset 0px 0px 18px 5px red ;
                }


            }
</style>
<?php
$mon=date("m");
if(isset($_GET["mon"])){
    $mon=$_GET["mon"];
}

?>
<a href="index.php?mon=<?=$mon-1;?>">上一個月(<?=$mon-1;?>)</a>
<span>本月(<?=$mon;?>)</span>    
<a href="index.php?mon=<?=$mon+1;?>">下一個月(<?=$mon+1;?>)</a>
<div class="ani4">
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
    $Mon="2";
    $fDay = "$year-$Mon-01";
    $fDayWeek = date("w", strtotime($fDay));
    $fDayBS = date("t", strtotime($fDay));
    $fDayMon = date("n", strtotime($fDay));
    echo $fDayMon . "月份";
    for ($i = 0; $i < 6; $i++) {
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
    </div>