<?php
try{
	$link = @mysqli_connect("localhost", "root", "", "..");

	mysqli_query($link, "SET NAMES 'utf8' ");

	$sql = "SELECT Diem , HoTen , TenMon FROM MonHoc , KetQua, SinhVien WHERE KetQua.MaMonHoc = MonHoc.MaMonHoc AND KetQua.MaSV = SinhVien.MaSV";

	$result = mysqli_query($link, $sql);	

	mysqli_close($link);
}
catch(Exception $ex){
	echo "Lỗi kết nối.";
}
?>

<table>
        <tr>
            <th>STT</th>
            <th>HoTen</th>
            <th>MonHoc</th>
            <th>Diem</th>
        </tr>

<?php
    $i=1;
    while($row = mysqli_fetch_array($result)){
        $chuoi = <<< EOD
        <tr>
            <td>{$i}</td>
            <td>{$HoTen}</td>
            <td>{$MonHoc}</td>
            <td>{$Diem}</td>
        </tr>
EOD;
        echo $chuoi; $i++;        
    }

?>
</table>
