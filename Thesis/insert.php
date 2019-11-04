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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="mineralcolors.css">
<div class="header">
<h2>Insertion Results</h2>
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
<?php
$servername = "localhost";
$username = "root";
$password = "legitpassword1";
$dbname = "mineral";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO mineralhome (mname, des)
VALUES
( '$_POST[mname]','$_POST[des]')";
$sql1 = "INSERT INTO chemical(Mineral_id, Formula, HCL)
VALUES
('$_POST[Mineral_id]', '$_POST[Formula]','$_POST[HCL]')";
$sql2 = "INSERT INTO physical(Mineral_id, Luster, Streak, Hardness, Color, Tenacity, Cleavage, Fracture, Density)
VALUES
('$_POST[Mineral_id]', '$_POST[Luster]','$_POST[Streak]', '$_POST[Hardness]',  '$_POST[Color]', '$_POST[Tenacity]', '$_POST[Cleavage]', '$_POST[Fracture]', '$_POST[Density]')";
$sql3 = "INSERT INTO Optical (Mineral_id, Type)
VALUES
( '$_POST[Mineral_id]','$_POST[Type]')";
$sql4 = "INSERT INTO crystal (Mineral_id, Sys, Twin)
VALUES
( '$_POST[Mineral_id]','$_POST[Sys]','$_POST[Twin]')";
if ($conn->query($sql) === TRUE) {
    echo "New Mineral Has been Inserted into MineralHome<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if ($conn->query($sql1) === TRUE) {
    echo "New Mineral Has been Inserted into Chemical<br>";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}
if ($conn->query($sql2) === TRUE) {
    echo "New Mineral Has been Inserted into Physical<br>";
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}
if ($conn->query($sql3) === TRUE) {
    echo "New Mineral Has been Inserted into Optical<br>";
} else {
    echo "Error: " . $sql3 . "<br>" . $conn->error;
}
if ($conn->query($sql4) === TRUE) {
    echo "New Mineral Has been Inserted into Crystal<br>";
} else {
    echo "Error: " . $sql4 . "<br>" . $conn->error;
}
$conn->close();
?>

</div>
<div class="column side">
<p>You are currently signed in as <?php echo htmlspecialchars($_SESSION["username"]); ?>. <br><a href="logout.php" >Click here to sign out!</a></p>
</div>
</body>

<div class ="footer">
<footer>
<p>Copyright 2019, Alexander Lyssy<br> UTPB Graduate Degree Program Use Only</p>
</footer>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>