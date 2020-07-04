<?php
    //include ("DataProvider.php");
    class monhoc{
        //hien thi ds monhoc
        public static function show(){
        $sql="SELECT * FROM `monhoc`";
        $monhoc=DataProvider::executeQuery($sql);
        while($row=mysqli_fetch_array($monhoc)){
            echo "{$row['MaMH']} and {$row['TenMon']} and {$row['SoTC']}<br>";
        }
    }}
?>