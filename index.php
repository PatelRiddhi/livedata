<script type="text/javascript" src="jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function() 
	{

		$('.editbox').hide();
		$(".edit_tr").on('click',function()
		{
			var ID=$(this).attr('id');

			$("#one_"+ID).hide();
			$("#two_"+ID).hide();
			$("#three_"+ID).hide();
			$("#four_"+ID).hide();

			$("#one_input_"+ID).show();
			$("#two_input_"+ID).show();
			$("#three_input_"+ID).show();
			$("#four_input_"+ID).show();

		}).on('change',function(e)
			{
				var ID=$(this).attr('id');
				var one_val=$("#one_input_"+ID).val();
				var two_val=$("#two_input_"+ID).val();
				var three_val=$("#three_input_"+ID).val();
				var four_val=$("#four_input_"+ID).val();

				var dataString = 'id='+ ID +'&name='+one_val+'&category='+two_val+'&price='+
				three_val+'&discount='+four_val;
				$.ajax(
				{
					type: "POST",
					url: "live_edit_ajax.php",
					data: {	id:ID,
							name:one_val,
							category:two_val,
							price:three_val,
							discount:four_val,
						},
					cache: false,
					success: function(e)
					{
						$("#one_"+ID).html(one_val);
						$("#two_"+ID).html(two_val);
						$("#three_"+ID).html(three_val);
						$("#four_"+ID).html(four_val);
					}
				});
			});
		});
 $(document).mouseup(function() {
        $(".editbox").hide();
        $(".text").show();
    });
	function deleterecord(id)
	{
		if(confirm('do you want to delete data...?'))
		{
			$.ajax(
			{
				type: "POST",
				url: "delete.php",
				data: {id:id,},
				cache: false,
				success: function(data)
				{
						if(data != "0")
						{
							alert(data);
							$("#del"+id).parent().parent().hide();
							// $("#one_"+ID).fadeIn();
							// $("#two_"+ID).fadeIn();
							// $("#three_"+ID).fadeIn();
							// $("#four_"+ID).fadeIn();

							// $("#one_input_"+ID).fadeIn();
							// $("#two_input_"+ID).fadeIn();
							// $("#three_input_"+ID).fadeIn();
							// $("#four_input_"+ID).fadeIn();
						}						
				}
			});
		}
		
	}
</script>
<?php
include('db.php');
$finaldata = "";
$tabledata = "";
// Table Header
$tablehead="<tr><th>#</th><th>Product Name</th><th>Category</th><th>Price</th><th>Discount</th><th>delete</th></tr>";
// Table Data Loop
while($row = mysqli_fetch_array($result)) 
{
	$id=$row['pid'];
	$name=htmlentities($row['name']);
	$category=htmlentities($row['category']);
	$price=htmlentities($row['price']);
	$discount=htmlentities($row['discount']); 

	$tabledata.="<tr id='$id' class='edit_tr'>
						<td>$id</td>
						<td class='edit_td' >
						<span id='one_$id' class='text'>$name</span>
						<input type='text' placeholder='Enter Name ' value='$name' class='editbox form-control' id='one_input_$id' />
						</td>


						<td class='edit_td' >
						<span id='two_$id' class='text'>$category</span>
						<input type='text' value='$category' class='editbox form-control' id='two_input_$id'/>
						</td>


						<td class='edit_td' >
						<span id='three_$id' class='text'>$ $price</span> 
						<input type='text' value='$price' class='editbox form-control' id='three_input_$id'/>
						</td>

						<td class='edit_td' >
						<span id='four_$id' class='text'>$discount%</span> 
						<input type='text' value='$discount' class='editbox form-control' id='four_input_$id'/>
						</td>

						<td ><button   class='delete_data btn btn-danger' id='del$id' onClick=\"return deleterecord($id)\">X</button></td>
				</tr>";
}
// Loop End
$finaldata = "<table width='100%' border=1 class='table table-hover'>". $tablehead . $tabledata . "</table>";
echo $finaldata;
?>
