<?php
    //Table of any number $n
    echo "Table of any number n<br>";
    $n=499;
    for($i=1;$i<=10;$i++){
        echo $i*$n;
        echo "<br>";
    }
    //Table of numbers in range $x-$y;
    echo "Table of numbers in range x-y<br>";
    $x=2;
    $y=10;
    for($i=1;$i<=10;$i++){
        for($row=$x;$row<=$y;$row++){
       
            echo "<span style='min-width:100px;border:1px solid gray;padding:10px;margin:10px;'>".$i*$row."</span>";
            
        }
        echo "<br/>";
    }
    echo "Printing 5 * pattern<br/>";
    //Printing
    /*
        *
        **
        ***
        ****
        *****
    */
    for($i=1;$i<=5;$i++){
        for($j=1;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
    echo "Printing 5 * pattern Reverse<br/>";
    //Printing
    /*
        *****
        ****
        ***
        **
        *
    */
    for($i=5;$i>=1;$i--){
        for($j=1;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
    //Printing
    /*
        *
        **
        ***
        ****
        *****
        *****
        ****
        ***
        **
        *
    */
    echo "Printing Combo 5 * series<br/>";
    for($i=1;$i<=5;$i++){
        for($j=1;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
    for($i=5;$i>=1;$i--){
        for($j=1;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
    //Printing
    /*
                    **
                   ****
                  ******
                 ********
                **********
    */
    echo "Printing something<br/>";
    for($i=1;$i<=5;$i++){
        for($j=5;$j>$i;$j--){
            echo "&nbsp;&nbsp;";
        }
        for($j=1;$j<=$i;$j++){
            echo "**";
        }
        echo "<br/>";
    }
    echo "table of any n<br>";
    $x = 3;
    $y = 5;
    for($i=1;$i<=10;$i++){
        for($row=$x;$row<=$y;$row++){
            echo "<span style='min-width:100px;border:1px solid gray;padding:10px;margin:10px;'>".$i*$row."</span>";
            
        }
      echo  "<br>";
    }
    

?>