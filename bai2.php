<?php
function daoNguocMang($mang) {
    return array_reverse($mang);
}
$numbers = [1, 2, 3, 4, 5];
$mangDaoNguoc = daoNguocMang($numbers);
print_r($mangDaoNguoc);
?>
