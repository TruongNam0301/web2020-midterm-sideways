<?php 
    //include ("DataProvider.php");
    class khoa{
        //hien thi ds khoa
        public static function show(){
            $sql="SELECT * FROM `khoa`";
            $khoa=DataProvider::executeQuery($sql);
            while($row=mysqli_fetch_array($khoa)){
                echo "<div class='td'>{$row['MaKhoa']}</div>";
                echo "<div class='td'>{$row['TenKhoa']}</div>";
                echo "<div class='td'>{$row['NamThanhLap']} </div>";
            }
        }
        public static function view(){
            $sql="SELECT * FROM `khoa`";
            $khoa=DataProvider::executeQuery($sql);
        }
}
  
?>