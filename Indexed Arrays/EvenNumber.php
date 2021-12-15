<?php
        
    $numbers = array( 22, 21, 38, 44, 59, 62, 43, 82, 45, 86);
    $evenNumber = array();
         
    foreach( $numbers as $value ) {
        if ($value % 2 == 0) {
            array_push($evenNumber,$value);
        }
    }

    echo "Even Numbers are : ";
    for ($i = 0; $i < count($evenNumber); $i++) {
        echo $evenNumber[$i] . " ";
    }
    echo "\n"
?>