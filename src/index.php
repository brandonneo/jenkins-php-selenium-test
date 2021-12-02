
<!DOCTYPE html>
<html>
<head>
<title>Search Page</title>

</head>

<body>

	<div class="container">
		<form name="form1"action="dashboard.php" onsubmit="submit()">
			<div class="field-container">
				<label>Search</label>
				<input type="text" name="Search">
			</div>
			<div class="field-container">
				<button type="submit" name="submit">Search</button>
			</div>

		</form>
	</div>
</body>
<script type="text/javascript">

	function submit(){
		var empt = document.forms["form1"]["Search"].value;
		if (empt == "")
		{
		alert("Please input a Value");
		return false;
	}
	else
{
	alert('Accept');
	return true;
}
}
</script>
</html>
