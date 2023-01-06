<?php
    function ucgen($sayi)
    {
        for ($i = 1; $i <= $sayi; $i++) {
                $sayac=1;
                while ($sayac<=$i){
                    echo "0";
                    $sayac++;
                }
            echo "<br>";
        }
    }
    ucgen(15);