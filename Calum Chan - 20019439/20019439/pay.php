<!doctype html>
<html lang="en">
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h1>Pay</h1>
    <br></br>
	<link href="_css/main.css" rel="stylesheet">
</header>

<nav ul class= "navbar">
	<li><a href= "index.php"> Home </a></li> 
	<li><a href= "#"> About us </a></li> 
	<li><a href= "#"> Contact Us </a></li> 
    </ul>
</nav>

<br></br>

<p style="float: left;"><img src="_images/mastercard.png" alt = "mastercard logo" height= "100px" width= "160px"></p> <!-- shows mastercard logo -->

<section>
<form action = '#' method ='POST'> <!-- takes inputs from user -->
	<input type='number' placeholder='input the card number' id='card' name='card' size=16/> <!-- inputs card number -->
	<br></br>
	<input type='number' placeholder='input the cvv' id='cvv' name='cvv' size=16/> <!-- inputs securitycode -->
    <br></br>
    <input type='number' placeholder='input the expiry month' id='expiryMonth' name='expiryMonth' size=16/> <!-- inputs expiry month -->
    <input type='number' placeholder='input the expiry year' id='expiryYear' name='expiryYear' size=16/> <!-- inputs expiry year -->
    <br></br>
    <input type='submit' value='check' id='checkbtn'/> <!-- confirmation button -->
    <input type ='hidden' id='h' name='h' value = ''/> <!-- hidden indicator to see if values are valid or not -->

    <br></br>
</form>
</section>

<?php 
$ccnum = isset($_POST['card'])? $_POST['card'] : ''; //gets creditcard value from form
$cvv = isset($_POST['cvv'])? $_POST['cvv'] : ''; //gets cvv value from form
$m = isset($_POST['expiryMonth'])? $_POST['expiryMonth'] : ''; //gets expiry month from form 
$y = isset($_POST['expiryYear'])? $_POST['expiryYear'] : ''; //gets expiry year
$h = isset($_POST['h'])? $_POST['h'] : ''; //gets indicator value
$connect = mysqli_connect('localhost','root','','creditcard'); //connects to sql creditcard database
if (!$connect){ //if fails to connect to database
    die('failed to connect');
}
    if ($h == 1) { //indicator will only be one if values are validated in javascript
    $date = new dateTime(); 
    $date->setDate($y, $m, 1); //sets year and month to equal to value inputted and day to equal 1
    $date->format('y-m-d'); //formats date to year then month then day
    $expdate = $date->format('y-m-d');
    $sql= "INSERT INTO card (ccnum,seccode,expdate) VALUES ('$ccnum', '$cvv' ,'$expdate')"; //inputs creditcard number, cvv code and expiry date
    $result = mysqli_query($connect,$sql);    //checks if values can be inputted
    if ($result==true) { //if inputted goes to success page
        header("Location: success.php");
    }
    else {
        echo "error"; //if cannot be inputted outputs error
    }
}
    else if ($h == -1) {
    header("Location: pay.php"); //reloads pay page if invalid results are put in
}
mysqli_close($connect);
?>

<script src="_scripts/javascript.js"></script>

</html>
