<?php
    function Prima ($n, $m){
        $banyak=0;
        for ($i = $n; $i <= $m; $i++){
            if (Task($i)){
                echo $i." ";
                $banyak++;
            }
        }
        echo "<br>";
        echo "maka, jumlah bilangan prima adalah : ".$banyak."<br>";
    }
    Prima (0,100);

    function Task ($number){
        if ($number == 1){
            return false;
        }
        if ($number == 2){
            return true;
        }
        $x = sqrt($number);
        $x = floor($x);

        for ($i = 2; $i <= $x; $i++){
            if ($number % $i == 0) {
                break;
            }
        }

        if ($x == $i-1){
            return true;
        }
        else {
            return false;
        }
    }
?>