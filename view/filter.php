<?php
    include("../Model/DataProvider.php");
    $check=$_POST['value'];
    if(!isset($_POST['value'])||$check=='khoa'){
        $sql="SELECT * FROM khoa";
        $khoa= DataProvider::executeQuery($sql);
        echo  $str="<div class='thead'>
        <div class='tr'>
            <div class='td'>TenKHOA</div>
            <div class='td'>NAMTHANhLap</div>
         </div>
        </div>
        <div class='tbody'>";
        function table ($TenKhoa,$Nam){
            $str="<form class='tr'>
			<div class='td'>$TenKhoa</div>
			<div class='td'>$Nam</div>
			<div class='td action'><button type='button' onclick='edit(this);'>edit</button></div>
        </form>";
        echo $str;
        };
        while($row=mysqli_fetch_array($khoa)){
            table ($row['TenKhoa'] , $row['NamThanhLap']);
        }
        echo "</div>";
    }
    if($check=='lop'){
        $sql="SELECT * FROM lop";
        $lop= DataProvider::executeQuery($sql);
        echo  $str="<div class='thead'>
        <div class='tr'>
            <div class='td'>TenLop</div>
           
         </div>
        </div>
        <div class='tbody'>";
        function table ($TenLop){
            $str="<form class='tr'>
			<div class='td'>$TenLop</div>
			<div class='td action'><button type='button' onclick='edit(this);'>edit</button></div>
        </form>";
        echo $str;
        };
        while($row=mysqli_fetch_array($lop)){
            table ($row['TenLop']);
        }
        echo "</div>";
    }

    if($check=='sinhvien'){
        $sql="SELECT * FROM sinhvien";
        $sinhvien= DataProvider::executeQuery($sql);
        echo  $str="<div class='thead'>
        <div class='tr'>
            <div class='td'>Hoten</div>
            <div class='td'>NgaySinh</div>
            <div class='td'>Email</div>
            <div class='td'>MaLop</div>
         </div>
        </div>
        <div class='tbody'>";
        function table ($HoTen,$NgaySinh,$Email,$MaLop){
            $str="<form class='tr'>
			<div class='td'>$HoTen</div>
            <div class='td'>$NgaySinh</div>
            <div class='td'>$Email</div>
            <div class='td'>$MaLop</div>
			<div class='td action'><button type='button' onclick='edit(this);'>edit</button></div>
        </form>";
        echo $str;
        };
        while($row=mysqli_fetch_array($sinhvien)){
            table ($row['MaSV'],$row['HoTen'], $row['NgaySinh'],$row['Email'],$row['MaLop']);
        }
        echo "</div>";
    }
    if($check=='monhoc'){
        $sql="SELECT * FROM monhoc";
        $monhoc= DataProvider::executeQuery($sql);
        echo  $str="<div class='thead'>
        <div class='tr'>
            <div class='td'>TenMon</div>
            <div class='td'>SoTinChi</div>
         </div>
        </div>
        <div class='tbody'>";
        function table ($TenMon,$SoTC){
            $str="<form class='tr'>
			<div class='td'>$TenMon</div>
			<div class='td'>$SoTC</div>
			<div class='td action'><button type='button' onclick='edit(this);'>edit</button></div>
        </form>";
        echo $str;
        };
        while($row=mysqli_fetch_array($monhoc)){
            table ($row['TenMon'] , $row['SoTC']);
        }
        echo "</div>";
    }
    
   


?>