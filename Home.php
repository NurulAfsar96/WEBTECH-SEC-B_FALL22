<?php
 session_start();
 require("databaseconnection.php");

 $result="";
 if(isset($_REQUEST['submit'])){
     $unit=$_POST['unit'];
	$rate=$_POST['rate'];
	$value=$_POST['value'];

	$result= $value*$rate;

	$sql = "Select * from converter";
$query= mysqli_query($conn,$sql);


     
     }
     
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>

	<h1> Home </h1><hr>
	<a href="Home.php">Home</a><br>
	<a href="Conversion.php">Conversion Rate</a><br>
	<a href="History.php">History</a>

	<br>
	<br>
	<h3> Converter </h3>
	<br>
	<form>
		<label for="category"> Select Category</label>
		<select name="category"> 
			<?php 
			while ($category = mysqli_fetch_array($query,MYSQLI_ASSOC)):; {
				
			}

			?>
			<option value="<?php echo $category["Category"];?>"></option>

		</select> <br>
		<label for="value"> Value:</label>
		<input type="text" name="value">
		<input type="submit" name="submit" value="Submit"><br>
		<label for="result"> Result:</label>
		<input type="text" name="result">

</form></body></html>
	