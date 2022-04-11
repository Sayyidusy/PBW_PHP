<?php
    function Prima ($n, $m){
        $banyak=0;
        for($n ; $n<=$m ; $n++){
            $k = 0; 
            for($j=1 ; $j<=$m ; $j++){
                if($n % $j == 0){
                    $k++;
                }
            }
            if($k == 2){
            echo $n." ";
            $banyak++;
            }
        }
        echo "<br>";
        echo "maka, jumlah bilangan prima adalah : ".$banyak."<br>";
    }
    Prima (1,11);
?>