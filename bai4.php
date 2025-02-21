<?php
$students = [
[ "Tên" => "Ngô Bá Kha", "nămSinh" => "12/03/2008", "giớiTính" => "Nam"
, "Toán" => 9.5, "Văn" =>9.0, "Anh" =>9.0 ],
[ "Tên" => "Trần Thị Bảo Ngọc", "nămSinh" => "25/06/2008", "giớiTính" => "Nữ"
, "Toán" => 7.0, "Văn" =>8.5, "Anh" =>8.0 ],
[ "Tên" => "Lê Hoàng Phúc", "nămSinh" => "25/06/2008", "giớiTính" => "Nam"
, "Toán" => 9.0, "Văn" =>6.5, "Anh" =>7.5 ],
[ "Tên" => "Phạm Thanh Trúc", "nămSinh" => "30/09/2008", "giớiTính" => "Nữ"
, "Toán" => 6.5, "Văn" =>6.0, "Anh" =>7.5 ],
[ "Tên" => "Đặng Gia Huy", "nămSinh" => "08/11/2008", "giớiTính" => "Nam"
, "Toán" => 7.5, "Văn" =>4.0, "Anh" =>6.0 ],
[ "Tên" => "Hồ Ngọc Linh", "nămSinh" => "20/04/2008", "giớiTính" => "Nữ"
, "Toán" => 9.0, "Văn" =>8.5, "Anh" =>6.0 ],
[ "Tên" => "Vũ Tuấn Kiệt", "nămSinh" => "15/07/2008", "giớiTính" => "Nam"
, "Toán" => 7.0, "Văn" =>4.0, "Anh" =>8.5 ],
[ "Tên" => "Nguyễn Thảo Vy", "nămSinh" => "05/01/2008", "giớiTính" => "Nữ"
, "Toán" => 7.5, "Văn" =>6.5, "Anh" =>5.0 ],
[ "Tên" => "Bùi Anh Dũng", "nămSinh" => "22/08/2008", "giớiTính" => "Nam"
, "Toán" => 9.0, "Văn" =>8.5, "Anh" =>7.5 ],
[ "Tên" => "Lương Hải Yến", "nămSinh" => "18/05/2008", "giớiTính" => "Nữ"
, "Toán" => 7.0, "Văn" =>7.5, "Anh" =>6.0 ],
[ "Tên" => "Trần Đình Phong", "nămSinh" => "11/12/2008", "giớiTính" => "Nam"
, "Toán" => 7.0, "Văn" =>7.5, "Anh" =>8.0 ],
[ "Tên" => "Nguyễn Thu Hương", "nămSinh" => "23/07/2008", "giớiTính" => "Nữ"
, "Toán" => 8.0, "Văn" =>7.5, "Anh" =>5.0 ],
[ "Tên" => "Mai Quốc Bảo", "nămSinh" => "07/03/2008", "giớiTính" => "Nam"
, "Toán" => 7.0, "Văn" =>6.5, "Anh" =>5.5 ],
[ "Tên" => "Đỗ Khánh Linh", "nămSinh" => "	29/09/2008", "giớiTính" => "Nữ"
, "Toán" => 8.5, "Văn" =>8.5, "Anh" =>7.5 ],
[ "Tên" => "Phạm Văn Đức", "nămSinh" => "13/06/2008", "giớiTính" => "Nam"
, "Toán" => 6.5, "Văn" =>6.0, "Anh" =>6.5 ],
[ "Tên" => "Trần Quốc Tuấn", "nămSinh" => "21/04/2008", "giớiTính" => "Nam"
, "Toán" => 6.5, "Văn" =>7.5, "Anh" =>8.5 ],
[ "Tên" => "Hoàng Minh Châu", "nămSinh" => "09/10/2008", "giớiTính" => "Nữ"
, "Toán" => 7.5, "Văn" =>8.5, "Anh" =>8.5 ],
[ "Tên" => "Nguyễn Xuân Huấn", "nămSinh" => "17/02/2008", "giớiTính" => "Nam"
, "Toán" => 6.5, "Văn" =>8.0, "Anh" =>7.5 ],
[ "Tên" => "Nguyễn Hồng Nhung", "nămSinh" => "12/11/2008", "giớiTính" => "Nữ"
, "Toán" => 9.5, "Văn" =>8.5, "Anh" =>7.0 ],
[ "Tên" => "Phan Bích Ngọc", "nămSinh" => "04/08/2008", "giớiTính" => "Nam"
, "Toán" => 8.5, "Văn" =>9.0, "Anh" =>7.0] 
];

foreach ($students as &$student) {
    $student['tb'] = round(($student["Toán"] + $student["Văn"] + $student["Anh"]) / 3, 2);
}
function duLieuSinhVien($students) {
    foreach ($students as $student) {
        echo "Họ tên: " . $student['Tên'] . ", Ngày sinh: " . $student['nămSinh'] . ", Giới tính: " . $student['giớiTính'] 
        . ", Toán: " . $student['Toán'] . ", Văn: " . $student['Văn'] . ", Tiếng Anh: " . $student['Anh'] 
        . ", Điểm TB: " . $student['tb'] . "<br>";
    }
}

function xepTheoTen($students) {
    usort($students, function($a, $b) {
        return strcmp($a['Tên'], $b['Tên']);
    });
    return $students;
}
echo "<h2>"."Danh Sách Sinh Viên Xếp Theo Tên"."</h2>". "<br>";
$svDuocXepTheoTen = xepTheoTen($students);
duLieuSinhVien($svDuocXepTheoTen);

function theoDiemTrungBinh($students) {
    usort($students, function($a, $b) {
        return $b['tb'] <=> $a['tb'];
    });
    return $students;
}
echo "<h2>"."Danh Sách Sinh Viên Xếp Theo Điếm Trung Bình"."</h2>". "<br>";
$XepTheoDiemTB = theoDiemTrungBinh($students);
duLieuSinhVien($XepTheoDiemTB);

function SinhVienTren8d($students) {
    return array_filter($students, function($student) {
        return $student['tb'] >= 8.0;
    });
}
echo "<h2>"."Danh Sinh Viên Trên 8 Điểm"."</h2>". "<br>";
$sinhVienDiemTren8 = SinhVienTren8d($students);
duLieuSinhVien($sinhVienDiemTren8);

function DanhSachNu($students) {
    return array_filter($students, function($student) {
        return $student['giớiTính'] === 'Nữ';
    });
}
echo "<h2>"."Danh Sách Sinh Viên Nữ"."</h2>". "<br>";
$sinhVienNu = DanhSachNu($students);
duLieuSinhVien($sinhVienNu);

function nuDiemCaoNhat($students) {
    $giớiTính = DanhSachNu($students);
    $nuDiemCaoNhat = null;
    foreach ($giớiTính as $student) {
        if ($nuDiemCaoNhat === null || $student['tb'] > $nuDiemCaoNhat['tb']) {
            $nuDiemCaoNhat = $student;
        }
    }
    echo "<br>";
    return $nuDiemCaoNhat;
}
 echo "<H2>"."Sinh Viên Nữ Cao Nhất"."</H2>";
$nuDiemCaoNhat = nuDiemCaoNhat($students);
duLieuSinhVien([$nuDiemCaoNhat]);