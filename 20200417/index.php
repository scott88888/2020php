<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$mon=date("m");
if(isset($_GET["mon"])){
    $mon=$_GET["mon"];
}
?>

<a href="index.php?mon=<?=$mon-1;?>">上一個月(<?=$mon-1;?>)</a>
<span>本月(<?=$mon;?>)</span>    
<a href="index.php?mon=<?=$mon+1;?>">下一個月(<?=$mon+1;?>)</a>
</body>
</html>