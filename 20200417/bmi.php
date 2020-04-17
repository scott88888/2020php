<!DOCTYPE html>
<html lang="en">

<?php
//isset()or empty()
if(isset($_GET['weight']) && isset($_GET['height'])){

$weight=$_GET['weight'];
$height=$_GET['height'];
$bmi=($weight/($height*$height*0.0001));
echo "身高CM".$height ."<br>";
echo "體重KG".$weight ."<br>";
if(!empty($height)){
    echo "你的BMI".$bmi;
 
     }else echo "輸入";
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表單傳值</title>
</head>
<body>
    <h4>BMI體重計算</h4>
    <form action="" method="get">
        體重:<input type="number" name="weight" id="" onkeyup="value=value.replace(/[^\d]/g,'') ">
        身高<input type="number" name="height" id="" onkeyup="value=value.replace(/[^\d]/g,'') ">
        <input type="submit" value="送出">
    </form>
</body>
</html>