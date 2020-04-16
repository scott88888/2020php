<h4>字串"好的,中國武漢肺炎"</h4>

<?php

echo "<div>"."天氣很好" ."</div>";

$str="好的,中國武漢肺炎";
$str2="";
$str3="";
$str2 =mb_substr($str, 0,2);
$str3 =mb_substr($str, 3,8);
$sp1 ="<span style ='color:red;font-size:24px'>" ;
$sp2 ="</span>";
echo $str2 .$sp1 .$str3 .$sp2 ;

echo "<hr>";



?>