<?php

for($i = 1; $i <= 10; $i++){
    ${"x".$i} = $i;
    if($i == 10){
        print ${"x".$i};
        break;
    }
    print ${"x".$i}.", ";
}