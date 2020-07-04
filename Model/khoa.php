<?php 
    include ("DataProvider.php");
    class khoa{
        //hien thi ds khoa
        public static function show(){
        $sql="SELECT * FROM `khoa`";
        $khoa=DataProvider::executeQuery($sql);
        while($row=mysqli_fetch_array($khoa)){
            echo "{$row['MaKhoa']} and {$row['TenKhoa']} and {$row['NamThanhLap']} <br>";
        }
    }
}
    khoa::show();
?>