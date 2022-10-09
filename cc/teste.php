<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>auto refresh</title>

	<style type="text/css">
		body{
			font-family: arial;
			color: #222;
		}
		.btn{
			color: #fff ;
			background: #333;
			padding: 10px 50px;
			border: 1px solid #fff;
			font-size: 14pt;
			border-radius: 5px;
		}
	</style>

</head>
<body>

	<button class="btn">Load</button>
	<div class="result"></div>

	<script src="../assets/js/jquery-3.6.1.js"></script>

	<script type="text/javascript">
		
		function act(){
			$.ajax({
				url: "datetime/displaydate.php",
				success: function(result){
					$(".result").html(result)
				},
				error: function(){
					$(".result").html("error")
				}
			});
		}

		setInterval(act,100);

	</script>
</body>
</html>