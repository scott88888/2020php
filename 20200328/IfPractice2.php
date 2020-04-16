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
$string="today is a good day to play"; //字串
$target="d";    //變數目標

$found=false;
$pos=0;         //起始位置
while(!$found && $pos<strlen($string)){  //如果還沒找到並且位置小於字串的長度  邏輯運算式

    if($string[$pos]==$target){
        $found=true;
        echo "找到了，位置在" . $pos;
    }
    $pos++;
}

if($found==false){
    echo "沒有找到";
}
?>
<hr>

<?php
$string="Technical flaws, regulatory hurdles, bureaucracy and a lack of leadership delayed the U.S. response to the virus even as scientists sounded the alarm" ;
$target= "c";

$found=true;
$i=0;   //PHP內建的尋找字串函數為strpos()
        //判斷字串的長度可以使用strlen()
while(!$found && $i<strlen($string) ){
    if ($string[$i]==$target){
    $found=false ;
    echo "位子在" .$i ;
    }
    $i++;
}
    if ($found==true){
        echo "沒找到" ;

    }

//我把found的初始值 定位ture ,找到的時候變成fasle  ,也就是跟老師的範例反過來
//因為 邏輯不是這樣,在判斷裡面 第一個條件就是false了 ,所以....
//為什麼 還是執行"沒找到" ,是我不能這樣定義fasle 還是我思考邏輯 不對


//第三個 strlen 只能找單一個字元 不能尋找字串, 尋找大於等於2個字元以上 要用strpos() ,對嗎 
//strlen 是字串長度..strpos是找第一個符合的字串..所以兩個以上的字元還是可以用的.但是只會回傳第一個符合的字串的位置





?>
<hr>

<?php
$string="Technical flaws,c regulatory hurdles c" ;
$target= "c";

$i=0;

for ($i=0 ; $i<strlen($string) ; $i++){
    if ($string[$i]==$target) {
    
    echo "在" .($i+1) ."位子找到了";
    echo "<br>";
    break;
    }
    
    else{
    
    echo  "第" .($i+1) ."個位子沒找到," ;
    }
    }
//第四個問題,用for做尋找字串,我的變成畫星星了 實在是想不出辦法,讓它在找到的時候停下來 ,
//用break

//最後一個問題 畫星星 可以用迴圈畫出來 ,那麼用if判斷每一格 然後在填入 也可以達到一樣的效果 ,除了要用很多if外,跟迴圈比較起來有甚麼差異 
//幹 白癡喔 for比較快阿

?>
<hr> 
</body>
</html>