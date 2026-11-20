<?php
for ($i=1;$i<=20;$i++){
    if ($i == 5){
        continue;
    }
    elseif ($i == 15){
        break;
        }
    echo $i . "<br>";
    }
?>