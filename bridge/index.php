<!DOCTYPE html>
<html>
<head>
	<title> Bridge</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
<form id="form" method="POST" action="calculate.php">
<div class="mydata">
	<h2>WATER BILL CALCULATOR</h2>
	<label>Initial number of m3 : </label> <input type="number" name="inumber" placeholder="0.0 m3"></br>
	<label>The number of m3 after the last bill payment</label></br></br>
	<label>Current number of m3 : </label> <input type="number" name="cnumber" placeholder="0.0 m3"></br>
	<label>The current number of m3 on the meter</label></br></br>
	<label>Category : </label>
	<select id="categ" name="categ">
	<option value="1">Public Tap</option>
	<option value="2">Residential</option>
	<option value="3">Non-Residential</option>
	<option value="4">Industries</option>
	</select></br>
<label>Choose your category here</label></br></br>
<input style="text-align:center; "  type="submit" id="submit" name="calculate" value="calculate">
</div>
</form>
</div>
</body>
</html>

       