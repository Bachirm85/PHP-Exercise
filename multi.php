
<!-- 
Array ( [musicals] => Array ( [0] => Oklahoma [1] => The Music Man [2] => South Pacific ) 
[dramas] => Array ( [0] => Lawrence of Arabia [1] => To Kill a Mockingbird [2] => Casablanca ) 
[mysteries] => Array ( [0] => The Maltese Falcon [1] => Rear Window [2] => North by Northwest ) ) -->

<?php

$band = array(
    'musicals' => array (
        0 => "Oklahoma",
        1 => "The Music Man",
        2 => "South Pacific",
    ),
    'dramas' => array (
        0 => "Lawrence of Arabia",
        1 => "To Kill a Mockingbird",
        2 => "Casablanca",
    ),
    'mysteries' => array (
        0 => "The Maltese Falcon",
        1 => "Rear Window",
        2 => "North by Northwest",
    )
);

print_r ($band);
?>