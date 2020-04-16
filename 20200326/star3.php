<style>
    * {
        font-family: "Courier New";
    }
</style>

<?php

for ($i=0;$i<5;$i++){

    if($i==0 || $i==4){
        for($j=0;$j<5;$j++){
            echo"*";
        }
    }else{
        for ($k=0;$k<5;$k++){
            if($k==0 || $k==4){
                echo "*";
            }else{
                echo "&nbsp;";
            }
        }
    
    }  
    echo"<br>";


}





for ($i=0;$i<5;$i++){

    if($i==0 || $i==4){
        for($j=0;$j<5;$j++){
            echo"*";
        }
    }else{
        for ($k=0;$k<5;$k++){
            if($k==0 || $k==4 ||$k==$i || $k==(4-$i)){
                echo "*";
            }else{
                echo "&nbsp;";
            }
        }
    
    }  
    echo"<br>";


}

$x=10;

for ($i=0;$i<$x;$i++){

    if($i==0 || $i==($x-1)){
        for($j=0;$j<$x;$j++){
            echo"*";
        }
    }else{
        for ($k=0;$k<$x;$k++){
            if($k==0 || $k==($x-1) ||$k==$i || $k==($x-$i-1)){
                echo "*";
            }else{
                echo "&nbsp;";
            }
        }
    
    }  
    echo"<br>";


}


?>