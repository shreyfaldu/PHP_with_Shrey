<?php

$facColo = array('shrey' => 'blue',
                    'joy' => 'black',
                    'daksh' => 'broen',
                    'samarth' => 'pink',
                8 => 'Eight');

// echo $facColo['shrey'];
// echo "<br>";
// echo $facColo[8];
// echo "<br>";

foreach($facColo as $key => $value){
    echo "the fav color of $key is $value<br>";
}


?>