<?php 
// $n = 0;
for ($n = 0; $n <= 100; $n++){

    if($n%3 == 0 and $n%5 == 0){
        // $n = "AB";
        echo "AB" . " - " . $n . "<br>";
    }
    elseif ($n%3 == 0) {
        // $n = "A";
        echo "A" . " - " . $n . "<br>";
    }
    elseif ($n%3 == 0) {
        // $n = "B";
        echo "B" . " - " . $n . "<br>";
    }

    elseif($n%3 !== 0 or $n%5 !== 0){
        echo $n . "<br>";
    }
}

