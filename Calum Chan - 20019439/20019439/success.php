<!doctype html>
<html lang="en">
<header>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h1>SUCCESS!</h1>
    <br></br>
	<link href="_css/main.css" rel="stylesheet">
</header>

<nav ul class= "navbar">
	<li><a href= "index.php"> Home </a></li> 
	<li><a href= "#"> About us </a></li> 
	<li><a href= "#"> Contact Us </a></li> 
    <br></br>
    </ul>
</nav>

<br></br>

<?php 
$connect = mysqli_connect('localhost','root','','creditcard'); //connects to database
if (!$connect){
    die('failed to connect');
}
	$sql = "SELECT ccnum FROM card ORDER BY ccnum ASC LIMIT 1"; //gets last inputted creditcard number
	$result = mysqli_query($connect,$sql);
	if (mysqli_num_rows($result)>0) { //checks if database is empty
		while ($row = mysqli_fetch_assoc($result)){ //gets result from database
			echo "Creditcard number : ";
			echo str_repeat("******",strlen(12)) . substr($row["ccnum"],-4); //conseals 12 of the digits except the last 4 from the creditcard number
			echo " saved!";
		}

	}
    else {
		echo "0 results"; 
	} 
?>

<script src="_scripts/javascript.js"></script>

</html>