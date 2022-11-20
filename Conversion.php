<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Conversion rate</title>
</head>
<body>

	<h1> Conversion</h1><hr>
	<a href="Home.php">Home</a><br>
	<a href="Conversion.php">Conversion Rate</a><br>
	<a href="History.php">History</a>

	<br>
	<br>
	<h2> Conversion Rate: </h2>
	<br>
	<form method="post">
		<label for="category"> Category</label>
		<input type="text" name="category"> <br>
		<label for="unit"> Unit:</label>
		<input type="text" name="unit"><br>
		<label for="rate"> Rate:</label>
		<input type="text" name="rate">
		<input type="submit" name="submit" value="Submit"><br>


	</form>
	<?php
require ("databaseconnection.php");
echo "<br>";
$print= "";
if (isset($_REQUEST['submit'])) {
	$category=$_POST['category'];
	$unit=$_POST['unit'];
	$rate=$_POST['rate'];
	
$sql = "INSERT INTO converter(Category, Unit, Rate) VALUES('$category','$unit','$rate')";
$query= mysqli_query($conn,$sql);

if($query)
{
	echo "Record Saved";
}
else { echo "Error Occured";}
mysqli_close($conn);
	
}

?>

</body>
</html>