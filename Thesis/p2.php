<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    echo "<script>
	alert('ERROR! You must Login to Proceed, redirecting to Login...');
	window.location.href='login.php';
	</script>";
    exit;
}
if($_SESSION["level"] == "user") {
	echo "<script>
	alert('ERROR! Your Account does not have Administrative privileges, redirecting to Home...');
	window.location.href='ph.php';
	</script>";
   // header("location: login.php");
    exit;
	}
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="mineralcolors.css">
<div class="header">
	<h2>Insertion Page</h2>
	</div>
</head>

<div  class="column side">
	<div class="sidenav">
	<a href="ph.php">Home Page</a><br>
	<a href="login.php">Login Page</a><br>
	<a href="p1.php">Query Page</a><br>
	<a href="p2.php">Insert Page</a><br>
	<a href="p3.php">Database Changelog</a><br>
	<a href="quiz.php">Can you Identify these Minerals?</a><br>
	<a href="quiz2.php">Take a practice Quiz!</a><br>
	</div>
</div>
<body>
<div class="column middle">
<h3>Welcome to the Insertion Page</h3>
<p>Please make changes Responsibly.</p><br>

<p>Your current administrative level is <?php echo htmlspecialchars($_SESSION["level"]); ?>.<br><br></p>
</head>
<div class="cent">
<table class="darkTable" id="tables1">
 
<form action="insert.php" method="post">
<tr><td>Mineral ID: </td><td><input type="text" name="Mineral_id" /></td></tr>
<tr><td>Mineral Name: </td><td><input type="text" name="mname" /></td></tr>
<tr><td>Description: </td><td><input type="text" name="des" /></td></tr>
<tr><td>Formula: </td><td><input type="text" name="Formula" /></td></tr>
<tr><td>HCL(Y/N): </td><td><input type="text" name="HCL" /></td></tr>
<tr><td>Luster: </td><td><input type="text" name="Luster" /></td></tr>
<tr><td>Streak: </td><td><input type="text" name="Streak" /></td></tr>
<tr><td>Hardness: </td><td><input type="text" name="Hardness" /></td></tr>
<tr><td>Tenacity:</td><td> <input type="text" name="Tenacity" /></td></tr>
<tr><td>Primary Color:</td><td> <input type="text" name="Color" /></td></tr>
<tr><td>Cleavage:</td><td> <input type="text" name="Cleavage" /></td></tr>
<tr><td>Fracture: </td><td><input type="text" name="Fracture" /></td></tr>
<tr><td>Density:</td><td> <input type="text" name="Density" /></td></tr>
<tr><td>Transparency: </td><td><input type="text" name="Type" /></td></tr>
<tr><td>Crystal System:</td><td> <input type="text" name="Sys" /></td></tr>
<tr><td>Twinning(Y/N):</td><td> <input type="text" name="Twin" /></td></tr>

</table>
</div>
<br><br>
<input type="submit" />



</form>

</div>
<div  class="column oside">
	<p>Please do not use this insertion page without extensive prior knowledge of both the database associated with this website and absolute assurity of the minerals and their properties that you are adding to the database. Misleading information on this page could have serious negative repercussions to students using this as a learning platform.</p><br>
	<p>You are currently signed in as <?php echo htmlspecialchars($_SESSION["username"]); ?>. <br><a href="logout.php" >Click here to sign out!</a></p>
</div>
<div class ="footer">
<footer>
<p>Copyright 2019, Alexander Lyssy<br> UTPB Graduate Degree Program Use Only</p>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </footer>
</div>
</html>