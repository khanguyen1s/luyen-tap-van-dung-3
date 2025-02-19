<?php
function xapXep($mang) {
    $n = count($mang);
    $mangDaSapXep = $mang;
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($mangDaSapXep[$j] > $mangDaSapXep[$j + 1]) {
                $temp = $mangDaSapXep[$j];
                $mangDaSapXep[$j] = $mangDaSapXep[$j + 1];
                $mangDaSapXep[$j + 1] = $temp;
            }
        }
    }
    return $mangDaSapXep;
}
$mang1 = [4, 2, 8, 1];
print_r(xapXep($mang1));
?>
