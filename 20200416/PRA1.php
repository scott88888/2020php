<h4>字串函式</h4>
<div>字串 asdf1234</div>
<?php
$str='asdf1234' ;
$str2="";

for($i=0;$i<strlen($str);$i++){
    $str2=$str2 ."+";
    echo "i=".$i .".=>" .$str2 ."<br>";
}
echo $str2;

echo "<hr>";

$str3=str_repeat("*",strlen($str));
echo $str3;
echo    "<hr>";
echo str_repeat("what ",20);

echo    "<hr>";



// 陣列轉字串
// $str4='this,is,a,book' ;
// $temp1="";
// $temp1=explode ( "," , $str4);
$str="this,is,a,book";
$strArray=explode(",",$str);
echo "<pre>" ;
print_r($strArray);
echo "</pre>";
echo $strArray[3];
echo    "<hr>";
// $str11=array_merge($strArray);
// echo $str11;
$arr=implode(" ",$strArray);
echo $arr;
echo "<hr>";

//取陣列N-N字元
$str2="The reason why a great man is great is that he resolves to be a great man";

echo substr($str2, 0,10)."....";

echo "<div>"."天氣很好" ."</div>";

?>