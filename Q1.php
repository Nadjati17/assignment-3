<?php

$x = 5;

if ($x > 1) {
   
    y($x);
}


function y($x = 0) 
    {
	if (! $x)
		return FALSE;

    for ($i = 1; $i <= 5; $i++) {
       
        for ($j = $i; $j < $x; $j++)
        
            echo " ";
          echo "<br>";  
    
       
        for ($j = 0; $j <= $x; $j++)
            echo "*";
    
        echo "\n";
    }
}

?>