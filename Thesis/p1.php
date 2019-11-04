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
?>
<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link  rel="stylesheet" href="mineralcolors.css"> 
<div class="header">
	<h2>Query Page</h2>
	<link rel="Golf Title Icon" href="title.jpg" />
</div>
</head>
<nav>
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
</nav>
</head>
<body>
<div class="column middle">
<h3>Welcome to the Basic Geology Query Page</h3>
<p>Here you can search for a few basic minerals that have already been inserted into the  database.</p>
<div class="cent1">
<table class="darkTable" align = "center" >

<form action="multiquery.php" method="GET">
<tr ><td >Does it React to HCL?(Y/N): &nbsp;</td><td> <input type="text" name="reac" /></td></tr>
<tr ><td >Mineral Hardness(round to nearest whole number 1-10): &nbsp;</td><td><input type="text" name="hard" /></td></tr>
<tr ><td >Does it Display Twinning?(Y/N): &nbsp;</td><td><input type="text" name="twin" /></td></tr>
<tr ><td >Color of its Streak: &nbsp;</td><td><input type="text" name="streak" /></td></tr>
<tr ><td >Color of the Mineral: &nbsp;</td><td><input type="text" name="color" /></td></tr>
<tr ><td >Cleavage of the Mineral: &nbsp;</td><td><input type="text" name="cleave" /></td></tr>
<tr ><td >Type of Fracturing Present:&nbsp; </td><td><input type="text" name="frac" /></td></tr>
<tr ><td >Crystal System: &nbsp;</td><td><input type="text" name="sys" /></td></tr>

</table>
<br>
</div>
<input type="submit" />
</form>

<form action="query.php" method="post">
<br>Mineral Name: <input type="text" name="mname" /><br><br>
<input type="submit" /><br>
</form>
<!-- This cod eis now redundant and uneccessary
<form action="specificquery.php" method="post">
<br>Mineral ID: <input type="text" name="Mineral_id" /><br><br>
<input type="submit" /></form><br>-->
</div>
</body>
<div  class="column oside">
	<a href="http://www.geologyin.com/2014/11/how-to-identify-minerals-in-10-steps.html">Need Help Identifying? Click here!</a><br>
	<p>This link will assist you in the basics of how to identify minerals on your own. By combining this information with the robust search queries located here, you will be able to accurately identify minerals on the fly.</p><br>
<p>You are currently signed in as <?php echo htmlspecialchars($_SESSION["username"]); ?>.<br> <a href="logout.php">Click here to sign out!</a></p>
</div>
<div class ="footer">
<footer>
<p>Copyright 2019, Alexander Lyssy<br> UTPB Graduate Degree Program Use Only</p>
</footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</html>