<?php

    $file = $_POST['filename'];
    $number = $_POST['number'];

    $fh = fopen($file ,'r');
    while ($line = fgets($fh)) {
    $lineE = explode(",", $line);

    echo $lineE[$number];
    //
    }
    fclose($fh);

?>