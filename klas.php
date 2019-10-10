<?php

echo "Wie zitten er bij je in de klas?\n";
$input = readline();
$klasgenoten = explode(" ", $input);
foreach ($klasgenoten as $value) {
    echo $value. PHP_EOL;
}

?>
