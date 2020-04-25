<?php
function indo_currenry($nominal){
    $result = "Rp" .number_format($nominal, 0, ',', '.');
    return $result;
}
;?>

