<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Sample Programs</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if (isset($_REQUEST['mail'])) {
	echo '已訂閱特賣情報電子報。';
} else {
	echo '未訂閱特賣情報電子報。';
}
?>
</body>
</html>

