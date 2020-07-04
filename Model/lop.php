<?php
    //include ("DataProvider.php");
    class lop{
        //hien thi ds lop
        public static function show(){
        $sql="SELECT * FROM `lop`";
        $lop=DataProvider::executeQuery($sql);
        while($row=mysqli_fetch_array($lop)){
            echo "{$row['MaLop']} and {$row['TenLop']} and {$row['MaKhoa']}<br>";
        }
    }}
?>