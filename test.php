<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>

	<select id="test" onchange="changeimg()">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
	</select>
	<script type="text/javascript">	
		function changeimg () {
			var x = document.getElementById('test').value;
			console.log(x);
		}
	</script>


</body>
</html>