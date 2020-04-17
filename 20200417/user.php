<?php
$status="fail";
if (!empty($_POST)){


    $acc=$_POST["acc"];
    $pw=$_POST["pw"];
    if($acc == "admin" && $pw=="1234"){
        echo "OK";
        $status="login";
    }else{
        echo "wrring!!";
    }
}
?>

<a href="login.php?status=<?=$status;?>">回首頁</a>