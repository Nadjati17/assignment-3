
   <h1><P>rhombus</P></h1> 
<?php
    
    $xy=10;

    for ($i=1; $i <=$xy ; $i++) { 
        echo "<br>";
        for ($j=1; $j <=$xy ; $j++) { 
            if ($j<=($xy-$i)) {
                echo "&nbsp";
            }
            else {
                if ($i==10) {
                    
                        for ($i=1; $i <=$xy ; $i++) { 
                            
                            for ($j=$xy; $j >=1; $j--) { 
                            if ($j<=($xy-$i)) {
                                echo "*";   
                            }
                        else {
                            echo "&nbsp";
                        }
                    }
                    echo "<br>";
                }
                
                   break; 
                }
                else{
                    echo "*";
                }
                    

                
                
            }
        }
    }

?>
    