<?php
    include ("DataProvider.php");
    class ketqua{
        //hien thi ds ketqua
        public static function show(){
        $sql="SELECT * FROM `ketqua`";
        $kq=DataProvider::executeQuery($sql);
        while($row=mysqli_fetch_array($kq)){
            echo "{$row['MaKQ']} and {$row['MaMH']} and {$row['MaSV']} and {$row['Diem']} <br>";
        }
    }}
?>