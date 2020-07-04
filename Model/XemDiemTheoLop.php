<style>
	select{
		margin-left: 600;
	}
	table{
    margin-left:600px;
    }

</style>
<?php
include_once("DataProvider.php");
$sql_lop = "SELECT MaLop, TenLop FROM Lop";
$dsSinhVien = DataProvider::ExecuteQuery($sql_lop);
?>
<h1 style="text-align: center;">DANH SÁCH</h1>
<h2 style="text-align: center;">Lớp</h2>
<form>
    <select name="Lop" id="Lop">
        <?php
        while($lop = mysqli_fetch_array($dsSinhVien))
        {
	    echo '<option value="'.$lop["MaLop"].'">'.$lop["TenLop"].'</option>';
        }
        ?>
    </select>
    <button>Tra Điểm</button>
</form>

<table>
	<tr>
		<th>STT</th>
		<th>Tên Sinh Viên</th>
		<th>Điểm</th>
	</tr>

<?php
    $sql = "SELECT Diem , HoTen , TenMon FROM MonHoc , KetQua, SinhVien";
	if(isset($_REQUEST["Lop"]))
	{
		$sql = $sql." WHERE MaLop = ".$_REQUEST["Lop"];
	}
    $result = DataProvider::ExecuteQuery($sql);   
	$i = 1;
	while($row = mysqli_fetch_array($result))
	{
        $chuoi = <<< EOD
        <tr>
            <td>{$i}</td>
            <td>{$row["HoTen"]}</td>
            <td>{$row["TenMon"]}</td>
            <td>{$row["Diem"]}</td>
        </tr>
EOD;
        echo $chuoi, $i++;
    }    
?>

</table>