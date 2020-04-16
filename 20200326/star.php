<?php

/*
for ($i=0;$i<5;$i++){
    
    for ($j=0;$j<($i+1);$j++){
        echo "♥" ;
       
    }
    echo "<br>";
}

echo "<hr>";
for ($i=5;$i>0;$i--){
    
    for ($j=0;$j<$i;$j++){
        echo "♥" ;
       
    }
    echo "<br>";
}
*/
echo "<hr>";


for ($i=0;$i<5;$i++){
    for ($j=0;$j<10;$j++){
        echo "♥" ;
    }

    echo "<br>";
}
echo "<hr>";

//老師解法 

for ($i=0;$i<5;$i++){

    for ($k=0;$k<(4-$i);$k++)
        echo "&nbsp;&nbsp;";
    for ($j=0;$j<($i*2+1);$j++){
        echo "♥" ; //none break space 
    }

    echo "<br>";
}
for ($i=3;$i>=0;$i--){

    for ($k=0;$k<(4-$i);$k++)
        echo "&nbsp;&nbsp;";
    for ($j=0;$j<($i*2+1);$j++){
        echo "♥" ; //none break space 
    }

    echo "<br>";
}

echo "<hr>";

//菱形




?>