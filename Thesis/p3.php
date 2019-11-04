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
	<h2>Access Page</h2>
	</div>
</head>
<body>
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
<div class="column middle">
<h3>Welcome to the Access page</h3>
<p>Located here you will see the changelog associated with the database.</p><br><br>
<div class = "cent2">
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

  $sql = "SELECT * FROM audittable1;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck > 0){
	  echo "<table class='steelBlueCols'>";
	  echo "<tr><th>Mineral_ID</th><th>Mineral Name</th><th>Date of Change</th></tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>";
		echo $row['Mineral_id'];
		echo "</td><td>";
		echo $row['mname'];
		echo "</td><td>";
		echo $row['DATETIMEp'];
		echo "</td><tr>";
	}
	  echo "</table>";
  }
?>
</div>
</div>
</body>
<div  class="column oside">
<p>You are currently signed in as <?php echo htmlspecialchars($_SESSION["username"]); ?>.<br> <a href="logout.php">Click here to sign out!</a></p>
</div>
<div class ="footer">
<footer>
<p>Copyright 2019, Alexander Lyssy<br> UTPB Graduate Degree Program Use Only</p>
</footer>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>