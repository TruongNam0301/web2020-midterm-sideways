<?php
    class DataProvider{
        public static function executeQuery($sql){
            $connect=mysqli_connect("localhost","root","","dbsinhvien")
                or die("<p align='center' style='font-size: large;' ><b>fail to get database</b></p>");
            mysqli_query($connect,"set name 'utf8mb4_general_ci'");
            $result=mysqli_query($connect,$sql);
            mysqli_close($connect);
            return $result;
        }
    };
?>
