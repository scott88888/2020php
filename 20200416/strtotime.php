<h4>日期</h4>
<div>文字日期轉時間序</div>
<?php
$time="2020-04-16 11:31:20";
$serialTime= strtotime ($time);
$dateTime= date ("Y年 m 月 d 日/ H : i : s");
echo date("Y年m月d日h點i分s秒",$serialTime);
echo "<hr>";
echo $dateTime;
echo "<hr>";


//我的生日 計算法
date_default_timezone_set("Asia/Taipei");
$BTime="2020-08-13 00:00:00";
$BTime2="2020-09-03 00:00:00";
$today= date("Y-m-d H:i:s");
$d1=strtotime($BTime);
$d3=strtotime($BTime2);
$d2=strtotime($today);

$Days=round(($d1-$d2));
echo "距離今年生日還有".$Days ."秒";
echo "<br>";
echo $dD=floor($Days/86400) ."天";
echo $hD=floor($Days%86400/3600) ."小時";
echo $iD=floor($Days%86400%3600/60) ."分鐘";
echo $sD=floor($Days%86400%3600%60) ."秒";
$Day2s=round(($d3-$d2));
echo $dD2=floor($Day2s/86400) ."天";
echo $hD2=floor($Day2s%86400/3600) ."小時";
echo $iD2=floor($Day2s%86400%3600/60) ."分鐘";
echo $sD2=floor($Day2s%86400%3600%60) ."秒";
echo "<br>";
echo "<hr>";
$my="距離今年我的生日還有".$dD.$hD.$iD.$sD ; 
$baby="距離今年寶貝的生日還有".$dD2.$hD2.$iD2.$sD2;
echo $my;
echo "<br>";
echo $baby;


//幹 終於搞定



?>