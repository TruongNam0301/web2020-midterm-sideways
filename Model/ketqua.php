<?php
    //include ("DataProvider.php");
    class ketqua{
        //hien thi ds ketqua
        public static function show(){
        $sql="SELECT * FROM `ketqua`";
        $kq=DataProvider::executeQuery($sql);
        while($row=mysqli_fetch_array($kq)){
            
            echo "<div class='td'>{$row['MaKQ']}</div>";
            echo "<div class='td'>{$row['MaMH']}</div>";
            echo "<div class='td'>{$row['MaSV']} </div>";
            echo "<div class='td'> {$row['Diem']}</div>";
        }
    }}
?>