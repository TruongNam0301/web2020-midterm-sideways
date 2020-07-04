<div class="table">
	<div class="thead">
		<div class="tr">
			<div class="td">One</div>
			<div class="td">Two</div>
			<div class="td">Three</div>
			<div class="td">Four</div>
			<div class="td"></div>
		</div>
	</div>
	<div class="tbody">
		<form class="tr">
			<div class="td">1</div>
			<div class="td">2</div>
			<div class="td">3</div>
			<div class="td">4567890123456</div>
			<div class="td action"><button type="button" onclick="edit(this);">edit</button></div>
		</form>
		<form class="tr">
			<div class="td">1</div>
			<div class="td">2</div>
			<div class="td">3</div>
			<div class="td">4</div>
			<div class="td action"><button type="button" onclick="edit(this);">edit</button></div>
		</form>
		<form class="tr">
			<div class="td">1</div>
			<div class="td">234567890123456</div>
			<div class="td">3</div>
			<div class="td">4</div>
			<div class="td action"><button type="button" onclick="edit(this);">edit</button></div>
		</form>

		<form class="tr">
			<div class="td">1</div>
			<div class="td">2</div>
			<div class="td">34567</div>
			<div class="td">4</div>
			<div class="td action"><button type="button" onclick="edit(this);">edit</button></div>
		</form>
		<form class="tr">
			<div class="td">1234</div>
			<div class="td">2</div>
			<div class="td">3</div>
			<div class="td">4</div>
			<div class="td action"><button type="button" onclick="edit(this);">edit</button></div>
		</form>
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