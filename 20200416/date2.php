<h4>日期</h4>
<div>30天</div>
<?php
$today=date("Y-m-d");
for ($i=0;$i<30;$i++){
    echo date ("Y-m-d",strtotime("+$i day".$today))."<br>";

}


?>