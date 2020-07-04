<?php
    include ("DataProvider.php");
    class sinhvien{
        //hien thi ds monhoc
        public static function show(){
        $sql="SELECT * FROM `sinhvien`";
        $sinhvien=DataProvider::executeQuery($sql);
        while($row=mysqli_fetch_array($sinhvien)){
            echo "{$row['MaSV']} and {$row['HoTen']} and {$row['NgaySinh']} and {$row['Email']} and {$row['MaLop']}<br>";
        }
    }}
    sinhvien::show();
?>