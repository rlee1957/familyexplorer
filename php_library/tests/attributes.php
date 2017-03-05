<html>
<head>
<title>attributes</title>
</head>
<body>
<input type=text id=test_input>
<select id=test_select>
	<option id="" selected disabled>- Select One -</option>
	<option id="1">One (1)</option>
	<option id="2">Two (2)</option>
	<option id="3">Three (3)</option>
</select>
<textarea id=test_textarea style="width:99%; height: 400px;"></textarea>
<script type="text/javascript" language="javascript">
var target = document.getElementById("test_textarea");
var source = document.getElementById("test_select");
for(var attr in source)
	{
	target.value += attr + "\n";	
	}
</script>
</body>
<html>