<?php
    //include ("DataProvider.php");
    class sinhvien{
        //hien thi ds monhoc
        public static function show(){
        $sql="SELECT * FROM `sinhvien`";
        $sinhvien=DataProvider::executeQuery($sql);
        while($row=mysqli_fetch_array($sinhvien)){
    
            echo "<div class='td'>{$row['MaSV']}</div>";
            echo "<div class='td'>{$row['HoTen']}</div>";
            echo "<div class='td'>{$row['NgaySinh']} </div>";
            echo "<div class='td'> {$row['MaLop']}</div>";
        }
    }}
    sinhvien::show();
?>