<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

for ($i=1 , $j=1 ; $i<9 || $j <10 ;$j++) {   //初始i j都為1 , 如果i<9 或 j<=9 停止  ,j每次+1 (因為是j每次+1,所以j能用<=9c或<10)
    if ($j>9){                                 //迴圈開始 ,每次j+1 當j到10 ,把i+1, j指定為1 ,斷點br
        $i++ ;
        $j = 1;
        echo "<br>";

    }
    echo "$i*$j=" .$i*$j .",";                  //當j還是<10的時候 顯示 i*j=i*j的值,


}


?>
<hr>

<?php

$i = 1;
$j = 0;
while ($i < 9 || $j < 9)
{
    $j++;
    if ($j > 9)
    {
        $i++;
        $j = 1;
        echo "<br>";
    }
    echo "$i*$j=" . $i * $j . ", ";
}
?>
<hr>


<?php

//遞迴解法  目前不會 函數運算

table99();
function table99($i=1, $j=0)
{
    $j++;
    if ($j > 9)
    {
        $i++;
        $j = 1;
        echo "<br>";
    }
    echo "$i*$j=" . $i * $j . ", ";

    if ($i < 9 || $j < 9)
    {
        table99($i, $j);
    }
}
?>
<hr> 

<?php

?>
</body>
</html>