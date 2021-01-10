<?php

    $file = fopen("test.txt", "w");

    $msg = "hello everybody";

    fwrite($file, $msg);

    fclose($file);

    echo "write file success";

?>