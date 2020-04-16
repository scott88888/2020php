
<style>
table{
    border:1px solid #999;
    padding:10px;
}


table td {
    padding:5px;
    text-align:center;
    border:1px solid #ccc;
}
table tr:nth-child(1){
    background:#bbb;
}
table td:nth-child(1){
    background:#bbb;
}



</style>

<?php

//for
//for($i=0;$i<10;$i=$i++) 


/*echo $i "現在值" ;{
    for($j=0;$j<10;$j++){
   
    echo "hello" .$i ."-".$j ."<br>" ;
}
}*/

/*
for($i=1;$i<=9;$i++){

    for($j=1;$j<=9;$j++){
        echo $i ."x" .$j ."=".($i*$j) ."<br>" ;
        if ($j=9) {
            echo "<br>";} 
            else  { echo "< >";
            }
    }

}
*/


//注意 每一個echo都要;結束
//for 外迴圈i=9次 加入列  內迴圈j=81次 加入欄
echo "<table border ='2'>";

for($i=1;$i<=9;$i++){

echo "<tr>";
    for($j=1;$j<=9;$j++){

        echo "<td>".$j ."x" .$i. 
        " = ".($i*$j)."</td>" ;
        
    }
    echo "</tr>";
    echo "<br>";
}
echo "</table>";

// for($s=1;$s<=9;$s++){

//     echo '<br/>';

//     for($y=1;$y<=9;$y++){

//         echo '<span style="display: inline-block;width: 85px;margin-bottom:5px;">'.$y.' * '.$s.' = '.$y * $s.'</span>';
//     }

//}

//老師解法
echo "<table border ='2'>";
for($i=0;$i<10;$i++){
    if($i==0){
echo "<tr><td></td>";
    }else{
echo "<tr><td>".$i."</td>";
}
    for($j=1;$j<10;$j++){
        if($i==0){
    echo "<td>".($i)."</td>" ;  
    }else {
    echo "<td>".($i*$j)."</td>" ;
    }
    }
    echo "</tr>";

}
echo "</table>";


//
echo "<table border=1>";


for($i=0;$i<10;$i=$i+1){
    
    if($i==0){
   echo "<tr>";
        echo "<td>&nbsp"."</td>";  
    for($j=1;$j<=9;$j++){
   echo "<td>&nbsp".$j."&nbsp</td>";
    }
}else
    if($i>0){
    echo "<td>".$i."</td>";
    for($j=1;$j<=9;$j++){
        echo "<td>&nbsp".($i*$j)."&nbsp</td>";
         }
   
}  

echo "</tr>";
    echo "<br>";
    // echo "<hr>";
}
  

echo "</table>";

//

//回圈中如果 i+j=0 填入空白
//如果 i+J>=1 填入i+j的值
//其他 i*j的值
echo "<table border ='2'>";

for($i=0;$i<10;$i++){
echo "<tr>";
    for($j=0;$j<10;$j++){
    if ($i+$j==0){
        echo "<td>&nbsp"."</td>" ;
        }else if ($i+$j>=1 && $i==0 || $j==0 ){
        echo "<td>" .($i+$j)."</td>" ;
        }else {
        echo "<td>".($i*$j)."</td>" ;
        }
    }
    echo "</tr>";
}
echo "</table>";




echo "<table border=1>";


for($i=0;$i<10;$i=$i+1){
    
    if($i==0){
  echo "<tr>";
  
        echo "<td>&nbsp"."</td>";  
    for($j=1;$j<=9;$j++){
   echo "<td>&nbsp".$j."&nbsp</td>";
    }
}elseif($i>0){
    echo "<td>".$i."</td>";
    for($j=1;$j<=9;$j++){
        echo "<td>&nbsp".($i*$j)."&nbsp</td>";
         }
   
}  

echo "</tr>";
    echo "<br>";
    // echo "<hr>";
}
  

echo "</table>";

?>