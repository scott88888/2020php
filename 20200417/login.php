<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
    form{
        dispaly:block;
        margin:100px auto;
        width: 300px;
        height: 200px;
        text-align: center;
        padding: 10px;
        border: 1px solid red;
        box-shadow: 0 0 5px #ccc;
    }
</style>

</head>
<body>
<?php
    $showLoginForm=true;
    if (isset($_GET['status'])){
        switch($_GET['status']){
            case "login";
                echo "你已登入";
                $showLoginForm=false;
            break;
            case "fail";
            echo "帳號密碼錯誤";
            break;
        }
    }

?>
<?php
  if($showLoginForm){
?>
  
    <form action="user.php" method="post">
        <div><input type="text" name="acc"></div>
        <div><input type="password" name="pw"></div>
        <div>
            <input type="submit" value="登入">
            <input type="reset" value="取消">
        </div>
    
    </form>

    <?php
}else{
?>
<h1>中獎了，使用過的口罩999個</h1>
<?php
}
?>
</body>
</html>