<?php
function timGiaTri($giaTri, $mang) {
    $n = array_search($giaTri, $mang);
    return ($n !== false) ? $n : -1;
}
$traiCay = ["Apple", "Banana", "Cherry"];
$n = timGiaTri("Banana", $traiCay);
echo $n;
?>