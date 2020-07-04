<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div>
	<select id="selects">
		<option value="khoa" selected>Khoa</option>
		<option value="lop">Lớp</option>
		<option value="sinhvien">Sinh Viên</option>
		<option value="monhoc" >Môn học</option>
	</select>
</div>

<script>
	$(document).ready(function(){
		$.ajax({
				url:"filter.php",
				type:"POST",
				data: {value:"khoa"},
				success: function(res){
				$(".table").html(res)
				}
			})
		$('#selects').change(function(){
			var val = $("#selects").val();
			console.log(val)
			$.ajax({
				url:"filter.php",
				type:"POST",
				data: {value:val},
				success: function(res){
				$(".table").html(res)
				}
			})
		})
	})

</script>

<div class="table">
	
	
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

<script>
   
function edit(element){
    var arr=[];
	
	var tr = jQuery(element).parent().parent();

	var s=$("form").data('id');
	arr.push(s);
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
                arr.push(value);
               
			} else {
				jQuery(this).find("BUTTON").text("edit");
                
			}
            
		});
        console.log(arr)
        $.ajax({
        url:"filter.php",
        type:"POST",
        data: {arr:arr,action:'update'},
        success: function(res){
          console.log(s)
        }
       
        })
        
	}
    
}
</script>