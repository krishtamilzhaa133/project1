

<!DOCTYPE html>
<html>
<head>
	<title>api use</title>
</head>
<body>
	<input type="number" id="myTextbox" name="textbox">
	<button id="myButton">Submit</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#myButton').click(function(){
            var myValue=$('#myTextbox').val();
            console.log(myValue);
            $.ajax({
			type:'get',
			url:'index.php',
			async:false,
			data:{
				id:myValue
			},
			success:function(response){
				console.log(response);
				console.log(response.email);
			},
		});
	});
		});
		
</script>
</body>
</html>