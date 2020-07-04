<head>
  <?php
    include ("DataProvider.php"); 
   
  ?>
</head>

<div class="table">
	<div class="thead">
		<div class="tr">
            <div class="td">MaKhoa</div>
			<div class="td">TenKhoa</div>
			<div class="td"><a href="test.php?sort=HoTen">HoTen</a></div>
            <div class="td">MaSV</div>
            <div class="td"><a href="test.php?sort=TenLop">TenLop</a></div>
            <div class="td">TenMon</div>
            <div class="td">Diem</div>
		</div>
	</div>
	<div class="tbody">
        <?php 
         
             $sql="SELECT khoa.MaKhoa, khoa.TenKhoa,HoTen,sinhvien.MaSV,TenLop,monhoc.TenMon,Diem from khoa INNER JOIN lop
             ON lop.MaKhoa=khoa.Makhoa INNER JOIN sinhvien
             ON sinhvien.MaLop=lop.MaLop INNER JOIN ketqua
             ON ketqua.MaSV=sinhvien.MaSV INNER JOIN monhoc
             ON ketqua.MaMH=monhoc.MaMH";
             if (@$_GET["sort"] == 'HoTen')
             {
                 $sql .= " ORDER BY HoTen";
             }
             elseif (@$_GET["sort"] == 'TenLop')
             {
                 $sql .= " ORDER BY TenLop";
             }
             $result=DataProvider::executeQuery($sql);
             while($row=mysqli_fetch_array($result)){
                echo "<form class='tr'>";
                 echo "<div class='td'>{$row['MaKhoa']}</div>";
                 echo "<div class='td'>{$row['TenKhoa']}</div>";
                 echo "<div class='td'>{$row['HoTen']} </div>";
                 echo "<div class='td'> {$row['MaSV']}</div>";
                 echo "<div class='td'> {$row['TenLop']}</div>";
                 echo "<div class='td'> {$row['TenMon']}</div>";
                 echo "<div class='td'> {$row['Diem']}</div>";
                 echo "<div class='td action'><button type='button' onclick='edit(this);'>edit</button></div>";
                 echo "</form>";
             }
        ?>
    </div>
    <div class="d"></div>
</div>
<style>
.table
{
	display:table;
	border-collapse:separate;
	border-spacing:2px;
}
.thead
{
	display:table-header-group;
	color:white;
	font-weight:bold;
	background-color:grey;
}
.tbody
{
	display:table-row-group;
}
.tr
{
	display:table-row;
}
.td
{
	display:table-cell;
	border:1px solid black;
	padding:1px;
}
.tr.editing .td INPUT
{
	width:100px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
   
function edit(element){
    var arr=[];
	var tr = jQuery(element).parent().parent();
	if(!tr.hasClass("editing")) {
		tr.addClass("editing");
		tr.find("DIV.td").each(function(){
			if(!jQuery(this).hasClass("action")){
				var value = jQuery(this).text();
				jQuery(this).text("");
				jQuery(this).append('<input type="text" value="'+value+'" />');
			} else {
				jQuery(this).find("BUTTON").text("save");
			}
		});
	} else {
		tr.removeClass("editing");
		tr.find("DIV.td").each(function(){
			if(!jQuery(this).hasClass("action")){
                
				var value = jQuery(this).find("INPUT").val();
                console.log(value);
				jQuery(this).text(value);
				jQuery(this).find("INPUT").remove();
                arr.push(value)
               
			} else {
				jQuery(this).find("BUTTON").text("edit");
                
			}
            
		});
        console.log(arr)
        $.ajax({
        url:"test2.php",
        type:"POST",
        data: {arr:arr},
        success: function(res){
          $(".d").html(res)
        }
       
        })
        
	}
    
}
</script>