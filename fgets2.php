<?php
    $file = fopen("text.txt", "r", false);

    while (!feof($file)) {
        echo fgets($file);
    }

    fclose($file);
?>